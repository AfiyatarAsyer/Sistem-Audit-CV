<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HitunganController extends Controller
{
    function operations()
    {
        // return DB::table('keuangans')->get();
        return Keuangan::sum('pemasukan');
    }
}
