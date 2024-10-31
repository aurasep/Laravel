<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RoutesController;

class RoutesController extends Controller
{
    public function Dashboard() {
        return 'Hallo, ini halaman dashboard yang dibuat dengan controller Laravel';
    }
}
