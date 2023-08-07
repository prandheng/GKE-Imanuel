<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidiController extends Controller
{
    public function index() {
        return view ('/formulir/sidi', [
            'title' => 'Formulir Sidi',
            'active' => 'sidi'
        ]);
    }
}