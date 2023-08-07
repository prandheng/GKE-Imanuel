<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaptisController extends Controller
{
    public function index() {
        return view('/formulir/form', [
            'title' => 'Forms',
            'active' => 'form'
        ]);
    }
}
