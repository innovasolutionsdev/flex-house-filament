<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Gallery;

use App\Models\MembershipPlan;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){

        $membership = MembershipPlan::all();
        $blogs = BlogPost::latest()->get();
        $galleryImages = Gallery::all(); // Fetch all gallery images from the database
        return view('home', compact('galleryImages', 'blogs', 'membership'));
    }
}
