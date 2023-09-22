<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        return view('admin.review');
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'job' => 'required|string',
            'message' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        // STORE DATA
        Review::create($data);

        // REDIRECT
        return redirect()->route('admin.review')->with('success', 'Data has been Created');
    }
}