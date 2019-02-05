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
        $path = "post";
        $id = 12;
        if ($request->hasFile('primaryImage')) {
            $filename = $repo->saveImage($request->primaryImage, $path, $id, 400); 
            $image->name = $filename;
            $image->galeria_id = $request->galeria_id;
            $image->save();
        }
        if($request->hasFile('file')){
            $filename = $repo->saveImage($request->file, $path, $id, 400); 
            return json_encode(["location"=>$filename]);
        }   

        return redirect()->back();
    }
}