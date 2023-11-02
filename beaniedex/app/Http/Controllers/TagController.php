<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Show all Tags
    public function index() {
        return view('tags.index', [
            'tags' => Tag::all()
        ]);
    }

    // Show a single Tag
    public function show(Tag $tag) {
        return view('tags.show', [
            'tag' => $tag
        ]);
    }

    // Show create form
    public function create() {
        return view('tags.create');
    }

    // Store Tag
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => ''
        ]);

        $tag = Tag::create($formFields);

        return redirect('/tags/' . $tag->id)->with('message', 'Tag created successfully');
    }
}
