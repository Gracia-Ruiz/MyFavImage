<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    public function create(){
        return view ('images.create');
    }

    public function store(ImageRequest $request){
        $imageData = $request->except('_token');
        $imageData['file'] = $request['file']->store('public/images');
        Image::create($imageData);
        return redirect()->route('welcome')->withMessage('Imagen guardada con éxito');
   }
}
