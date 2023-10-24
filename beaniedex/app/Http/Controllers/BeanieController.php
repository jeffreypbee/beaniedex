<?php

namespace App\Http\Controllers;

use App\Models\Beanie;
use App\Models\ProductLine;
use Illuminate\Http\Request;

class BeanieController extends Controller
{
    // Show all Beanies
    public function index() {
        return view('beanies.index', [
            'beanies' => Beanie::all()
        ]);
    }

    // Show a single Beanie
    public function show(Beanie $beanie) {
        return view('beanies.show', [
            'beanie' => $beanie
        ]);
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
            'notes' => ''
        ]);

        $productLine = ProductLine::find($formFields['product_line_id']);

        $beanie = $productLine->beanies()->create($formFields);

        return redirect('/beanies')->with('message', 'Beanie created successfully!');
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
            'notes' => ''
        ]);

        $beanie->update($formFields);

        return redirect('/beanies')->with('message', 'Beanie updated successfully!');
    }
}
