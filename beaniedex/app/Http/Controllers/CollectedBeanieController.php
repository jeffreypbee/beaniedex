<?php

namespace App\Http\Controllers;

use App\Models\Beanie;
use Illuminate\Http\Request;
use App\Models\CollectedBeanie;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CollectedBeanieController extends Controller
{
    public function store(Request $request) {
        $formFields = $request->validate([
            'beanie_id' => 'required',
            'user_id' => 'required'
        ]);

        $collectedBeanie = CollectedBeanie::create($formFields);
        
        return redirect('/beanies/' . $collectedBeanie->beanie->id)->with('message', 'Beanie added to collection!');
    }

    public function destroy(CollectedBeanie $collectedBeanie) {
        $beanieId = $collectedBeanie->beanie_id;

        $collectedBeanie->delete();

        return redirect('/beanies/' . $beanieId)->with('message', 'Beanie removed from collection');
    }
}
