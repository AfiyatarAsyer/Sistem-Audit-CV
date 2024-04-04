<?php

namespace App\Http\Controllers;

use App\Models\post_data;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use illuminate\Support\Str;
use illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        $this->authorize('admin');
        $pengumuman = post_data::latest();

        return view('dashboard.semuapost.index', [
            'posts' => post_data::where('user_id', auth()->user()->id)->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.semuapost.create', [
            'categories' => Category::all()
        ]);

       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('image')->store('post-images');

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:post_datas',
            'category_id' => 'required',
            'image' => 'image|file|max:3024',
            'body' => 'required'
        ]);

        // if($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('post-images');
        // }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body),200);

        post_data::create($validateData);

        return redirect('/dashboard/semuapost')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(post_data $post)
    {
        // return view('dashboard.semuapost.index', [
        //     'posts' => $post::where('user_id', auth()->user()->id)->get()
        // ]);

        // return $post;
        // return view('dashboard.semuapost.show', [
        //     'post' => $post
        // ]);
        // return $post::where('user_id', auth()->user()->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post_data $post_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post_data $post_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post_data $post_data)
    {
        // if($post_data->image){
        //     Storage::delete($post_data->image);
        // }
        // post_data::destroy($post_data->id);

        // return redirect('/dashboard/semuapost')->with('success', 'Sudah Berhasil Di Hapus');
    }

    public function delete($id){
        
        $data = post_data::find($id);
        $data->delete();
        return redirect('/dashboard/semuapost')->with('success', 'Data Berhasil Di Hapus');
    }

    public function tampilkandata($id){

        // $data = post_data::where('user_id', auth()->user()->id)->get();
        $data = post_data::find($id);
        // dd($data);
        return view('dashboard.semuapost.tampilkandata', compact('data'));
    }

    public function editdata($id){
        $data = post_data::find($id);
        return view('dashboard.semuapost.edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = post_data::find($id);
        
        // if($request->file('image')){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //        $request->file('image')->store('post-images');
        // }
        
        $data->update($request->all());
        
        return redirect('/dashboard/semuapost')->with('success', 'Data Berhasil Di Update');
    }

    public function checkSlug(Request $request)
    {

       $slug = SlugService::createSlug(post_data::class, 'slug', $request->title);
       return response()->json(['slug'=> $slug]);

       
    }
    
}
