<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeria;
use App\Image;

class GaleriaController extends Controller {
    private $galeria;
    private $image;

    public function __construct() {
        $this->galeria = new Galeria;
        $this->image = new Image;
    }

    public function index(){
        $galerias = $this->galeria->all();
        return view('Panel/galerias', compact('galerias'));
    }
    
    public function store(Request $request){
        $this->galeria->name = $request->name;
        $this->galeria->save();
        return redirect()->back();
    }

    public function show($id){
        $images = $this->image->all()->where('galeria_id', $id);
        $galeria = $this->galeria->find($id);
        return view('Panel/galeriax', compact('galeria', 'images'));

    }

    public function update(Request $request, $id){
        $galeria_current = $this->galeria->find($id);
        $galeria_current->name = $request->name;
        $galeria_current->save();
        return redirect()->back();
    }
}
