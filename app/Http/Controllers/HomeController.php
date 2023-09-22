<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Education;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Review;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $achievement = Achievement::count();
        $project = Project::count();
        $review = Review::count();
        $social_media = SocialMedia::count();
        $education = Education::all();
        $organizations = Organization::all();

        return view('home', [
            'achievement' => $achievement, 
            'education' => $education,
            'project' => $project,
            'social_media' => $social_media,
            'review' => $review,
            'organizations' => $organizations,
        ]);
        // return view('home');
    }

    public function home() {
        return view('welcome');
    }

    public function review() {
        return view('review-create');
    }
}
