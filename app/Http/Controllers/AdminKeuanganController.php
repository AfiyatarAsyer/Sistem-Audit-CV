<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class AdminKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('admin');
        $export = Keuangan::latest();
        
        return view('dashboard.keuangan.index', [
            'exports' => $export->paginate(5)->withQueryString()
        ]);

        return view('dashboard.keuangan.create', [
            'keuangan' => Keuangan::all()
        ]);

        return view('dashboard.keuangan.Exportfiles', [
            'keuangan' => Keuangan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.keuangan.create', [
            'categories' => Keuangan::all()
        ]);

    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
        ]);

        // $validateData['user_id'] = auth()->user()->id;
        // $validateData['excerpt'] = Str::limit(strip_tags($request->body),200);

        Keuangan::create($validateData);

        return redirect('/dashboard/createkeuangan')->with('success', 'New post has been added!');
    }
    // public function Exportfiles()
    // {
    //     return view('dashboard.keuangan.Exportfiles', [
    //         'categories' => Keuangan::all()
    //     ]);

    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'name' => 'required|max:255',
    //         'pemasukan' => 'required',
    //         'pengeluaran' => 'required',
    //     ]);

    //     // $validateData['user_id'] = auth()->user()->id;
    //     // $validateData['excerpt'] = Str::limit(strip_tags($request->body),200);

    //     Keuangan::create($validateData);

    //     return redirect('/dashboard/keuangan')->with('success', 'New post has been added!');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
     public function editdata($id){
        $data = Keuangan::find($id);
        return view('dashboard.keuangan.edit', compact('data'));
    }

    public function edit(Keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatedatakeu(Request $request, $id){
        $data = Keuangan::find($id);
        
        // if($request->file('image')){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //        $request->file('image')->store('post-images');
        // }
        
        $data->update($request->all());
        
        return redirect('/dashboard/createkeuangan')->with('success', 'Data Berhasil Di Update');
    }
    public function update(Request $request, Keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }

    // public function tampilkandata($id){

    //     // $data = post_data::where('user_id', auth()->user()->id)->get();
    //     $data = Keuangan::find($id);
    //     // dd($data);
    //     return view('dashboard.keuangan.tampilkandata', compact('data'));
    // }

    // public function Exportfiles($id){

    //     // $data = post_data::where('user_id', auth()->user()->id)->get();
    //     $data = Keuangan::find($id);
    //     // dd($data);
    //     return view('dashboard.keuangan.Exportfiles', compact('data'));
    // }

    public function tampilkandata($id){

        // $data = post_data::where('user_id', auth()->user()->id)->get();
        $data = Keuangan::find($id);
        // dd($data);
        return view('dashboard.keuangan.tampilkandata', compact('data'));
    }
}
