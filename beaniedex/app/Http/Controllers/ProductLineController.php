<?php

namespace App\Http\Controllers;

use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductLineController extends Controller
{
    // Show single Product Line
    public function show(ProductLine $productLine) {
        return view('productlines.show', [
            'productLine' => $productLine
        ]);
    }
}
