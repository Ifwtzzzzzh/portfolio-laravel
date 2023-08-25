<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('admin.project', ['projects' => $projects]);
    }

    public function create() {
        return view('admin.project-create');
    }

    public function edit($id) {
        $project = Project::find($id);

        return view('admin.project-edit', ['project' => $project]);
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'tech_stack' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'description' => 'required|string',
            'doc_link' => 'required|string',
            'github_link' => 'required|string'
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
        Project::create($data);

        // REDIRECT
        return redirect()->route('admin.project')->with('success', 'Data has been Created');
    }

    public function update(Request $request, $id) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'tech_stack' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'description' => 'required|string',
            'doc_link' => 'required|string',
            'github_link' => 'required|string'
        ]);

        $project = Project::find($id);

        if ($request->image) {
            // SAVE NEW IMAGE
            $image = $request->image;
            $originalImageName = Str::random(10).$image->getClientOriginalName();
            $image->storeAs('public/image', $originalImageName);
            $data['image'] = $originalImageName;

            // STORAGE OLD IMAGE
            Storage::delete('public/image'.$project->image);
        }

        $project->update($data);

        return redirect()->route('admin.project')->with('success', 'Data has been Updated');
    }

    public function destroy($id) {
        Project::find($id)->delete();

        return redirect()->route('admin.project')->with('success', 'Data has been Deleted');
    }
}
