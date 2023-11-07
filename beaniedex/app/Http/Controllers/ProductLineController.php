<?php

namespace App\Http\Controllers;

use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductLineController extends Controller
{

    // Show all Product Lines
    public function index() {
        return view('productlines.index', [
            'productLines' => ProductLine::all()
        ]);
    }

    // Show single Product Line
    public function show(ProductLine $productLine) {
        return view('productlines.show', [
            'productLine' => $productLine
        ]);
    }

    // Show creation form
    public function create() {
        return view('productlines.create');
    }

    // Store ProductLine data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => '',
            'plural' => 'required',
            'image' => '',
            'color' => 'required'
        ]);

        ProductLine::create($formFields);

        return redirect('/productlines')->with('message', 'Product Line created successfully!');
    }

    // Show Edit form
    public function edit(ProductLine $productLine) {
        return view('productlines.edit', [
            'productLine' => $productLine
        ]);
    }

    // Update Product Line data
    public function update(Request $request, ProductLine $productLine) {
        $formFields = $request->validate([
            'name' => 'required',
            'plural' => 'required',
            'color' => 'required',
            'image' => '',
            'description' => ''
        ]);

        $productLine->update($formFields);

        return redirect('/productlines/' . $productLine->id)->with('message', 'Product line updated successfully');
    }
}
