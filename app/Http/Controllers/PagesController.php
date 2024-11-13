<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loginPage () {
        return view('public.login');
    }

    public function dashboardAdmin () {
    //    $url = action([PagesController::class, 'loginPage']);
       return redirect('/login');
    }

    protected static function createPenerbit ($data)
    {
       return self::create($data);
    }
}

