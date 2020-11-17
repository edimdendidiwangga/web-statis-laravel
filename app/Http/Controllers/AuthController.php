<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('form');
    }

    public function wellcome(Request $request) {
        $name = $request->all();
        return view('wellcome', ['name' => $name]);
    }
}
