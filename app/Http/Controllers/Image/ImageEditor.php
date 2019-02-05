<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ImageEditor extends Controller {

    public function save(Request $request) {
        $filename = request()->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('/images/teste/'), $filename);
        return json_encode(["location"=>url('/images/teste/'.$filename)]);
    }
}