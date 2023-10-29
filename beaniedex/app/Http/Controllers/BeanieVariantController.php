<?php

namespace App\Http\Controllers;

use App\Models\Beanie;
use App\Models\BeanieVariant;
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

    public function edit(BeanieVariant $variant) {
        return view('variants.edit', [
            'variant' => $variant
        ]);
    }

    public function update(Request $request, BeanieVariant $variant) {
        $formFields = $request->validate([
            'name' => 'required',
            'image' => '',
            'notes' => ''
        ]);

        $variant->update($formFields);

        return redirect('/beanies/' . $variant->beanieId)->with('message', 'Variant successfully updated!');
    }
}
