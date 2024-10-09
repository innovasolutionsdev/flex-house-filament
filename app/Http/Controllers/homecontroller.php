<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){

        $galleryImages = Gallery::all(); // Fetch all gallery images from the database
        return view('home', compact('galleryImages'));
    }
}
