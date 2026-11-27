<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    function getServices(){
        $data = DB::table('services')->get();

        return $data;
    }
}
