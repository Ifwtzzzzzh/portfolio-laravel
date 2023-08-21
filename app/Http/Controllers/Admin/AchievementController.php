<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class AchievementController extends Controller
{
    public function index() {
        $achievements = Achievement::all();

        return view('admin.achievement', ['achievements' => $achievements]);
    }

    public function create() {
        return view('admin.achievement-create');
    }

    public function edit($id) {
        $achievement = Achievement::find($id);

        return view('admin.achievement-edit', ['achievement' => $achievement]);
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        // IMAGE
        $image = $request->image;

        // GET IMAGE ORIGINAL NAME
        $originalImageName = Str::random(10).$image->getClientOriginalName();

        // UPLOAD FILE
        $image->storeAs('public/image', $originalImageName);

        // OVERRIDE DATA
        $data['image'] = $originalImageName;

        // STORE IMAGE NAME
        Achievement::create($data);

        // REDIRECT
        return redirect()->route('admin.achievement')->with('success', 'Data has been Created');
    }

    public function update(Request $request, $id) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $achievement = Achievement::find($id);

        if ($request->image) {
            // SAVE NEW IMAGE
            $image = $request->image();
            $originalImageName = Str::random(10).$image->getClientOriginalName();
            $image->storeAs('public/image', $originalImageName);
            $data['image'] = $originalImageName;

            // STORAGE OLD IMAGE
            Storage::delete('public/image'.$achievement->image);
        }

        $achievement->update($data);

        return redirect()->route('admin.achievement')->with('success', 'Data has been Updated');
    }

    public function destroy($id) {
        Achievement::find($id)->delete();

        return redirect()->route('admin.achievement')->with('success', 'Data has been Deleted');
    }
}
