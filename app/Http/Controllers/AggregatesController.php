<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesController extends Controller
{
    function countRow()
    {
        return DB::table('students')->count();
    }
    function maxRow()
    {
        return DB::table('students')->max('id');
    }
    function minRow()
    {
        return DB::table('students')->min('id');
    }
    function avgRow()
    {
        return DB::table('students')->avg('roll');
    }
}
