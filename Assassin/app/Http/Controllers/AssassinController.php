<?php

namespace App\Http\Controllers;

use App\Models\Assassin;
use App\Http\Requests\StoreAssassinRequest;
use App\Http\Requests\UpdateAssassinRequest;

class AssassinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assassins = Assassin::with('weapon')->get();
        return view('assassins.index', compact('assassins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $weapons = \App\Models\Weapon::all();
        return view('assassins.create', compact('weapons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssassinRequest $request)
    {
        $data = $request->validated();
        Assassin::create($data);

        return redirect()->route('assassins.index')->with('status', 'Assassin created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assassin $assassin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assassin $assassin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssassinRequest $request, Assassin $assassin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assassin $assassin)
    {
        //
    }
}
