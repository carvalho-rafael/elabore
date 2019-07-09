<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Elabore - @yield('title')</title>
    <meta name="author" content="Rafael Carvalho">
    <meta name="description" content="A Elabore é uma empresa de ensino multidisciplinar que oferece cursos como 
    pré-vestibular e reforço escolar. conta com uma equipe de professores">
    <link rel="shortcut icon" type="image/png" href="images/icon2.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @section('nav')

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="#" class="nav-brand">        
            <img class="logo img-fluid p-2" src="images/logo.svg" alt="Elabore">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item"><a class="nav-link link-section" href="#about">Sobre Nós</a></li>
                <li class="nav-item"><a class="nav-link link-section" href="#team"> Nossa Equipe</a></li>
                <li class="nav-item"><a class="nav-link link-section" href="#gallery">Galeria</a></li>
                <li class="nav-item"><a class="nav-link link-section" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link link-section" href="#contact">Contato</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/rafael-carvalho-dev/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/rafael.victor.737">
                        <svg class="social-icon facebook-icon" enable-background="new 0 0 455.73 455.73" version="1.1" viewBox="0 0 455.73 455.73" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475  h62.025v64.622h-44.382c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z" />
                        </svg>
                    </a>
                </li>
            
            </ul>
        </div>
        <!-- <div id="nav-effect"></div> -->
    </nav>
    @show

    @yield("content")

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>