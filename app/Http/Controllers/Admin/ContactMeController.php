<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\ContactMe;
use App\Models\Education;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Review;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMeController extends Controller
{
    public function index() {
        return view('admin.contact');
    }

    public function welcome() {
        $reviews = Review::count();
        $social_medias = SocialMedia::all();
        $educations = Education::all();
        $organizations = Organization::all();
        $projects = Project::all();

        return view('welcome', [
            'educations' => $educations,
            'social_medias' => $social_medias,
            'reviews' => $reviews,
            'organizations' => $organizations,
            'projects' => $projects,
        ]);
    }

    public function create() {
        return view('contact-create');
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        // STORE DATA
        ContactMe::create($data);

        // GET SPETIFY DATA
        $email_data = [
            'receiver' => 'rahmandanosa@gmail.com',
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
        ];

        // MAIL HANDLER
        Mail::send('email', $email_data, function($message) use($email_data) {
            $message->to($email_data['receiver'])
                    ->from($email_data['email'])
                    ->subject($email_data['subject']);
        });

        // REDIRECT
        return redirect()->route('welcome')->with('success', 'Email has been sent');
    }
}
