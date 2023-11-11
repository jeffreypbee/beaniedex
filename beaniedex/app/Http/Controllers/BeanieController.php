<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Beanie;
use App\Models\ProductLine;
use Illuminate\Http\Request;
use App\Models\CollectedBeanie;
use Illuminate\Support\Facades\Auth;

class BeanieController extends Controller
{
    // Show all Beanies
    public function index() {
        return view('beanies.index', [
            'beanies' => Beanie::orderBy('name')->filter(request(['search', 'species']))->get()
        ]);
    }

    // Show a single Beanie
    public function show(Beanie $beanie) {
        if (Auth::check()) {
            return view('beanies.show', [
                'beanie' => $beanie,
                'versions' => Beanie::where('number', '!=', '')->where('number', $beanie->number)->get(),
                'collected' => CollectedBeanie::where('beanie_id', '=', $beanie->id)->where('user_id', '=', auth()->user()->id)->first()
            ]);
        } else {
            return view('beanies.show', [
                'beanie' => $beanie,
                'versions' => Beanie::where('number', '!=', '')->where('number', $beanie->number)->get()
            ]);
        }
        
    }

    // Show creation form
    public function create() {
        return view('beanies.create', [
            'productLines' => ProductLine::all()
        ]);
    }

    // Store Beanie
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'species' => '',
            'product_line_id' => '',
            'birthday' => '',
            'release_date' => '',
            'retired_date' => '',
            'poem' => '',
            'notes' => '',
            'image' => '',
            'version' => '',
            'number' => ''
        ]);

        $productLine = ProductLine::find($formFields['product_line_id']);

        $beanie = $productLine->beanies()->create($formFields);

        return redirect('/beanies/' . $beanie->id)->with('message', 'Beanie created successfully!');
    }

    // Show Edit form
    public function edit(Beanie $beanie) {
        return view('beanies.edit', [
            'beanie' => $beanie,
            'productLines' => ProductLine::all()
        ]);
    }

    // Update Beanie data
    public function update(Request $request, Beanie $beanie) {
        $formFields = $request->validate([
            'name' => 'required',
            'species' => '',
            'product_line_id' => '',
            'birthday' => '',
            'release_date' => '',
            'retired_date' => '',
            'poem' => '',
            'notes' => '',
            'image' => '',
            'version' => '',
            'number' => ''
        ]);

        $beanie->update($formFields);

        return redirect('/beanies/' . $beanie->id)->with('message', 'Beanie updated successfully!');
    }

    // Destroy Beanie
    public function destroy(Beanie $beanie) {
        $beanie->tags()->detach();
        $beanie->delete();

        return redirect('/beanies')->with('message', 'Beanie deleted successfully');
    }

    // Manage Tags
    public function manageTags(Beanie $beanie) {
        return view('tags.manage', [
            'beanie' => $beanie,
            'tags' => Tag::all()
        ]);
    }

    // Remove Tag
    public function removeTag(Beanie $beanie, Tag $tag) {
        $beanie->tags()->detach($tag->id);

        return redirect('/beanies/' . $beanie->id)->with('message', 'Tag successfully removed');
    }

    // Add Tag
    public function addTag(Request $request, Beanie $beanie) {
        $beanie->tags()->attach($request['tag']);

        return redirect('/beanies/' . $beanie->id)->with('message', 'Tag successfully added');
    }
}
