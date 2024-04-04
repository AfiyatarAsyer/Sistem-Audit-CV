<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\DataBulananChart;
use App\Models\post_data;
use App\Models\User;
use App\Models\Keuangan;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DataBulananChart $chart)
{
    $posts = post_data::count();
    $users = User::where('is_admin','0')->count();
    // $admins = User::where('is_admin','1')->count();
    $pemasukans = Keuangan::sum('pemasukan');
    $pengeluarans = Keuangan::sum('pengeluaran');
    $admins = ($pemasukans)-($pengeluarans);

    return view('dashboard.index', ['chart' => $chart->build()],compact('posts','users','admins','pemasukans','pengeluarans'));

    

}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
