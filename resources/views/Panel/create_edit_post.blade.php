<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create edit</title>
</head>
<body>
    

Criar e editar posts

@if (isset($post))
    <form action="{{route('posts.update', $post->id)}}" method="post">
    {!! method_field('patch') !!}
@else
    <form action="{{route('posts.store')}}" method="POST">
@endif
        <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
        <input type="text" name="title" id="title" value="{{$post->title or old('title')}}" required>
        <input type="text" name="subtitle" id="subtitle" value="{{$post->subtitle or old('subtitle')}}" required>
        <input type="text" name="author" id="author" value="{{$post->author or old('author')}}" required>
        <textarea name="content" id="editor" required>
        @if (isset($post))
            {!!$post->content!!}
        @endif
        </textarea>
        <input type="submit" value="Enviar">
    </form>

    <p>
    @if (isset($post))
        {{date("d-m-Y", strtotime($post->created_at))}}
    @endif
    </p>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>  
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script>
        tinymce.init({
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            selector: '#editor',
            relative_urls : false,
            images_upload_url: '{{url('/painel/images/store')}}',
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '{{url('/painel/images/store')}}');
                var token = document.getElementById("_token").value;
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                formData.append('path', 'post');
                formData.append('id', '{{$post->id}}');
                xhr.send(formData);
            },
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var blobInfo = blobCache.create(id, file);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                input.click();
            }
        });
    </script>

</body>
</html>