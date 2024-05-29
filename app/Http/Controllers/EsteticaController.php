<?php

namespace App\Http\Controllers;

use App\Models\estetica;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EsteticaController extends Controller
{

    /**
     * Display a listing of the resource.
     */public function index(): Response 
    {
        return Inertia::render('Estetica/Dashboard', [
            //
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
    public function show(estetica $estetica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(estetica $estetica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, estetica $estetica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(estetica $estetica)
    {
        //
    }
}
