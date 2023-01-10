<?php

namespace App\Http\Controllers;

use App\Models\Visitantes;
use App\Http\Requests\StoreVisitantesRequest;
use App\Http\Requests\UpdateVisitantesRequest;

class VisitantesController extends Controller
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
     * @param  \App\Http\Requests\StoreVisitantesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisitantesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function show(Visitantes $visitantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitantes $visitantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitantesRequest  $request
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitantesRequest $request, Visitantes $visitantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitantes $visitantes)
    {
        //
    }
}
