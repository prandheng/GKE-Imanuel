<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        return view('galleries', [
            'title' => 'Galeri Gereja',
            'active' => 'galleries',
            'galleries' => Gallery::latest()->paginate(12)
        ]);
    }
}
