<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $name = $request->input('name', 'Indro Adi');
        return redirect('/nama')->with('nama', $name);
    }
}
