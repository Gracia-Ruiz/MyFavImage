<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $imgs = Image::orderBy('created_at','desc')->take(8)->get();

    return view ('welcome', compact('imgs'));
    }
}
