<?php

namespace App\Http\Controllers;

use App\Models\Expos;
use App\Http\Requests\StoreExposRequest;
use App\Http\Requests\UpdateExposRequest;

class ExposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExposRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExposRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expos  $expos
     * @return \Illuminate\Http\Response
     */
    public function show(Expos $expos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expos  $expos
     * @return \Illuminate\Http\Response
     */
    public function edit(Expos $expos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExposRequest  $request
     * @param  \App\Models\Expos  $expos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExposRequest $request, Expos $expos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expos  $expos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expos $expos)
    {
        //
    }
}
