<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project; 

class PageController extends Controller
{
    public function home()
    {
        $profile = Profile::first(); 
        $socialLinks = json_decode($profile->social_links, true); 
        return view('home', compact('profile', 'socialLinks'));
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function gallery()
    {
        $images = array_diff(scandir(public_path('galeri')), ['.', '..']); 
        return view('gallery', ['images' => $images]);
    }
    
}
