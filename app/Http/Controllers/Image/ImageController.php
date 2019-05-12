<?php
namespace App\Http\Controllers;
use App\Image;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller {
    
    public function index() {
        $image = new Image;
        $images = $image->all();
        return view('images', compact('images'));
    }

    public function store(Request $request) {
        $image = new Image;
        $repo = new ImageRepository;

        $path = $request->path;
        $id = $request->id;

        if ($request->hasFile('image')) {
            $filename = $repo->saveImage($request->image, $path, $id, 400); 
            $image->name = $filename;
            $image->galeria_id = $id;
            $image->save();
        }
        if($request->hasFile('file')){
            $filename = $repo->saveImage($request->file, $path, $id, 400); 
            return json_encode(["location"=>$filename]);
        }

        return redirect()->back();
    }

    public function destroy($id) {
        $image = new Image;
        $thisImage = $image->find($id);
        unlink(public_path('/storage' . $thisImage->name));
        $destroyImage = $thisImage->delete();
        
        if($destroyImage)
            return redirect()->back();
        else {
            return "erro ao deletar";
        }
    }
}