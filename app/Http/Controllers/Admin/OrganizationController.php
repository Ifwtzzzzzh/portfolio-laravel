<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class OrganizationController extends Controller
{
    public function index() {
        $organizations = Organization::all();

        return view('admin.organization', ['organizations' => $organizations]);
    }

    public function create() {
        return view('admin.organization-create');
    }

    public function edit($id) {
        $organization = Organization::find($id);

        return view('admin.organization-edit', ['organization' => $organization]);
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        // IMAGE
        $logo = $request->logo;

        // GET IMAGE ORIGINAL NAME
        $originalLogoName = Str::random(10).$logo->getClientOriginalName();

        // UPLOAD FILE
        $logo->storeAs('public/image', $originalLogoName);

        // OVERRIDE DATA
        $data['image'] = $originalLogoName;

        // STORE IMAGE NAME
        Organization::create($data);

        // REDIRECT
        return redirect()->route('admin.organization')->with('success', 'Data has been Created');
    }

    public function update(Request $request, $id) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $organization = Organization::find($id);

        if ($request->logo) {
            // SAVE NEW IMAGE
            $logo = $request->logo();
            $originalLogoName = Str::random(10).$logo->getClientOriginalName();
            $logo->storeAs('public/image', $originalLogoName);
            $data['image'] = $originalLogoName;

            // STORAGE OLD IMAGE
            Storage::delete('public/image'.$organization->logo);
        }

        $organization->update($data);

        return redirect()->route('admin.organization')->with('success', 'Data has been Updated');
    }

    public function destroy($id) {
        Organization::find($id)->delete();

        return redirect()->route('admin.organization')->with('success', 'Data has been Deleted');
    }
}
