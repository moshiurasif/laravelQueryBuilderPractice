<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetriveController extends Controller
{
    public function selectAllRows()
    {
        $result = DB::table('students')->get();
        return $result;
    }
    public function selectSingleRow()
    {
        $result = DB::table('students')->where('name', 'Moshiur')->first();

        return $result;
    }

    public function findRow()
    {
        $result = DB::table('students')->find(4);
        return $result;
    }
    public function selectColumn()
    {
        $result = DB::table('students')->pluck('name');
        return $result;
    }
    public function selectMultiColumn()
    {
        $result = DB::table('students')->pluck('name', 'roll');
        return $result;
    }
    public function specificColumnData()
    {
        $result = DB::table('students')->where('id', '5')->value('class');
        return $result;
    }
}
