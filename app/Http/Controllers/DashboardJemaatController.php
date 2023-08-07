<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class DashboardJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jemaats.index', [
            'title' => 'Data Jemaat',
            'jemaats' => Jemaat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jemaats.create', [
            'jabatans' => Jabatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'jabatan_id' => 'required',
            'address' => 'required|max:255',
            'phone' => 'required|max:255' 
        ]);

        Jemaat::create($validatedData);

        return redirect('/dashboard/jemaat')->with('success', 'Data baru telah ditambahkan!');
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
        return view('dashboard.jemaats.edit', [
            'jemaat' => $jemaat,
            'jabatans' => Jabatan::all()
        ]);
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'jabatan_id' => 'required',
            'phone' => 'required'
        ]);

        // $validatedData['user_id'] = auth()->user()->id;

        Jemaat::where('id', $jemaat->id)
                ->update($validatedData);

        return redirect('/dashboard/jemaat')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jemaat  $jemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jemaat $jemaat)
    {
        Jemaat::destroy($jemaat->id);

        return redirect('/dashboard/jemaat')->with('success', 'Data telah dihapus!');
    }
}
