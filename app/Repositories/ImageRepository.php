<?php
namespace App\Repositories;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ImageRepository
{
    public function saveImage($image, $path, $id, $size) {
        if (!is_null($image)) {
            $file = $image;
            $extension = $image->getClientOriginalExtension();
            $fileName = date('Y-m-d_H:i:s') .'.' . $extension; 
            $destinationPath = public_path('storage/images/'.$path.'/'.$id.'/');
            $url = '/images/'.$path.'/'.$id.'/'.$fileName;
            $fullPath = $destinationPath.$fileName;
            if (!file_exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0775, true);
            }
            $image = Image::make($file);
           /* 
                ->resize($size, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg');
            */
            $image->save($fullPath, 100);
            
            return $url;
        } else {
            return 'http://'.$_SERVER['HTTP_HOST'].'/storage/images/'.'placeholder300x300.jpg';
        }
    }
}