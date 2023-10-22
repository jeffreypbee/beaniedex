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
}
