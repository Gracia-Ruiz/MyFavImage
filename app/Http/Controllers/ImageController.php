<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $imgs = Image::all();
        return view('images.index',compact('imgs'));
    }

    public function create(){
        return view ('images.create');
    }

    public function store(ImageRequest $request){
        $user = Auth::user();
        $imageData = $request->except('_token');
        $imageData['file'] = $request['file']->store('public/images');
        $image = $user->images()->create($imageData);
        return redirect()->route('welcome')->withMessage('Imagen guardada con éxito');
   }

   public function show($id)
   {
       $imgs = Image::findOrFail($id);
       return view('images.show',compact('imgs'));
   }

   public function edit($id)
   {
       $imgs = Image::findOrFail($id);
       return view('images.edit',compact('imgs'));
   }

   public function update($id, ImageRequest $request)
   {
       $image_path = $request['file']->store('public/images');
       $imgs = Image::findOrFail($id);
       Storage::delete($imgs->file);
       $imgs->title = $request->title;
       $imgs->file = $image_path;
       $imgs->save();
       return redirect()->route('image.show', ['id'=>$imgs->id])->withMessage("Imagen actualizada");
   }

   public function destroy($id)
   {
       $imgs = Image::findOrFail($id);

       $imgs->delete();

       return redirect()->route('image.index')->withMessage('Imagen eliminada');
   }
}
