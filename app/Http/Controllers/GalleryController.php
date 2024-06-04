<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $data = [
            'main_page' => 'Gallery',
        ];   
        return view('gallery', $data);
    }
}
