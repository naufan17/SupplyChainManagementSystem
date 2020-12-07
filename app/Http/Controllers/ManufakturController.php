<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManufakturController extends Controller
{
    public function manufaktur(){
        return view('page.manufaktur');
    }
}

