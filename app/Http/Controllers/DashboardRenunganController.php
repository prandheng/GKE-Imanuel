<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardRenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.renungans.index', [
            'title' => 'Renungan',
            'renungans' => Renungan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.renungans.create');
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Renungan::create($validatedData);

        return redirect('/dashboard/renungan')->with('success', 'Renungan baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function show(Renungan $renungan)
    {
        return view('dashboard.renungans.show', [
            'renungan' => $renungan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Renungan $renungan)
    {
        return view('dashboard.renungans.edit', [
            'renungan' => $renungan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renungan $renungan)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug != $renungan->slug) {
            $rules['slug'] = 'required|unique:renungans';
        }

        $validatedData = $request->validate($rules);
        
        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Renungan::where('id', $renungan->id)
            ->update($validatedData);

        return redirect('/dashboard/renungan')->with('success', 'Renungan telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renungan $renungan)
    {
        if($renungan->image){
            Storage::delete($renungan->image);
        }
        Renungan::destroy($renungan->id);
        return redirect('/dashboard/renungan')->with('success', 'Renungan berhasil dihapus!');
    }

    public function autoSlug(Request $request)
    {
        $slug = SlugService::createSlug(Renungan::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
