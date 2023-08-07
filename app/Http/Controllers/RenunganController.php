<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;

class RenunganController extends Controller
{
    public function index() {
        return view('renungans', [
            'title' => 'Renungan',
            'active' => 'renungan',
            'renungans' => Renungan::latest()->paginate(9)
        ]);
    }

    public function show(Renungan $renungan) {
        return view('renungan', [
            'title' => 'Renungan',
            'active' => 'renungan',
            'renungan' => $renungan
        ]);
    }
}
