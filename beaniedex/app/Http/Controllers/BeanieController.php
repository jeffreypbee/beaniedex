<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Beanie;
use Illuminate\Http\Request;

class BeanieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Beanies/Index', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Beanie $beanie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beanie $beanie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beanie $beanie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beanie $beanie)
    {
        //
    }
}
