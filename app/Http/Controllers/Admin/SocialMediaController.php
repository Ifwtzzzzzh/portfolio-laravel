<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class SocialMediaController extends Controller
{
    public function index() {
        $social_medias = SocialMedia::all();

        return view('admin.social-media', ['social_medias' => $social_medias]);
    }

    public function create() {
        return view('admin.social-media-create');
    }

    public function edit($id) {
        $social_media = SocialMedia::find($id);

        return view('admin.social-media-edit', ['social_media' => $social_media]);
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        // IMAGE
        $logo = $request->logo;

        // GET IMAGE ORIGINAL NAME
        $originalLogoName = Str::random(10).$logo->getClientOriginalName();

        // UPLOAD FILE
        $logo->storeAs('public/image', $originalLogoName);

        // OVERRIDE DATA
        $data['logo'] = $originalLogoName;

        // STORE IMAGE NAME
        SocialMedia::create($data);

        // REDIRECT
        return redirect()->route('admin.social-media')->with('success', 'Data has been Created');
    }

    public function update(Request $request, $id) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $social_media = SocialMedia::find($id);

        if ($request->logo) {
            // SAVE NEW IMAGE
            $logo = $request->logo;
            $originalLogoName = Str::random(10).$logo->getClientOriginalName();
            $logo->storeAs('public/image', $originalLogoName);
            $data['logo'] = $originalLogoName;

            // STORAGE OLD IMAGE
            Storage::delete('public/image'.$social_media->logo);
        }

        $social_media->update($data);

        return redirect()->route('admin.social-media')->with('success', 'Data has been Updated');
    }

    public function destroy($id) {
        SocialMedia::find($id)->delete();

        return redirect()->route('admin.social-media')->with('success', 'Data has been Deleted');
    }
}
