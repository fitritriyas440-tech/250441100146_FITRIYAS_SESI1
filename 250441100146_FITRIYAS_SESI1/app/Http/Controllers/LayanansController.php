<?php

namespace App\Http\Controllers;

use App\Models\layanans;
use Illuminate\Http\Request;

class LayanansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanans::with('')
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanans.create',[
            'layanans'
        ])
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
    public function show(layanans $layanans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(layanans $layanans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, layanans $layanans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(layanans $layanans)
    {
        //
    }
}
