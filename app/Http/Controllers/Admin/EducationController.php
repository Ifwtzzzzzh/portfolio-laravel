<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class EducationController extends Controller
{
    public function index() {
        $educations = Education::all();

        return view('admin.education', ['educations' => $educations]);
    }

    public function create() {
        return view('admin.education-create');
    }

    public function edit($id) {
        $education = Education::find($id);

        return view('admin.achievement-edit', ['education' => $education]);
    }

    public function store(Request $request) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string'
        ]);

        // STORE DATA
        Education::create($data);

        // REDIRECT
        return redirect()->route('admin.education')->with('success', 'Data has been Created');
    }

    public function update(Request $request, $id) {
        // GET DATA WITHOUT TOKEN
        $data = $request->except('_token');

        // VALIDATION DATA
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|string'
        ]);

        $education = Education::find($id);

        $education->update($data);

        return redirect()->route('admin.education')->with('success', 'Data has been Updated');
    }

    public function destroy($id) {
        Education::find($id)->delete();

        return redirect()->route('admin.education')->with('success', 'Data has been Deleted');
    }
}
