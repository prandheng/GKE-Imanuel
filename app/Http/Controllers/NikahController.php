<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NikahController extends Controller
{
    public function index() {
        return view('/formulir/nikah', [
            'title' => 'Formulir Nikah',
            'active' => 'nikah'
        ]);
    }
}
