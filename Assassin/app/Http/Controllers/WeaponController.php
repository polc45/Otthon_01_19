<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weapons = Weapon::all();
        return view('weapons.index', compact('weapons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWeaponRequest $request)
    {
        $data = $request->validated();
        Weapon::create($data);

        return redirect()->route('weapons.index')->with('status', 'Weapon created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weapon $weapon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weapon $weapon)
    {
        //
    }
}
