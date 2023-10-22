<?php

namespace App\Http\Controllers;

use App\Models\Beanie;
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
}
