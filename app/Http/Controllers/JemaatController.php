<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jemaat', [
            'title' => 'Data Jemaat',
            'active' => 'jemaat',
            'jemaats' => Jemaat::latest()->paginate(20)
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function show(Jemaat $jemaat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function edit(Jemaat $jemaat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jemaat $jemaat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jemaat $jemaat)
    {
        //
    }
}
