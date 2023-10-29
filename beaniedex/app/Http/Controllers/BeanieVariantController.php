<?php

namespace App\Http\Controllers;

use App\Models\Beanie;
use Illuminate\Http\Request;

class BeanieVariantController extends Controller
{
    public function create(Beanie $beanie) {
        return view('variants.create', [
            'beanie' => $beanie
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'beanie_id' => '',
            'notes' => '',
            'image' => ''
        ]);

        $beanie = Beanie::find($formFields['beanie_id']);

        $variant = $beanie->variants()->create($formFields);

        return redirect('/beanies/' . $beanie->id)->with('message', 'Variant created successfully!');
    }
}
