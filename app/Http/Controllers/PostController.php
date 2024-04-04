<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post_data;


class PostController extends Controller
{
//  ketika ketemu yang nama fungsinya index maka di jalankan fungsi di dalam ini.
// ketika di jalankan maka buka halaman blog dan isikan titelnya dengan blog, 
// kemudian buat variabel $blog yang berisi data dari model post_data yang di ambil di model.

    public function index()
    {

        // dd(request('search'));
        $posts = post_data::latest();
        
        if(request('search')){
            $posts->where('title', 'like', '%'. request('search'). '%' )
                  ->orWhere('body', 'like', '%'. request('search'). '%');
        }
    
        return view('blog', [
            "title" => "Pengumuman",
            "active" => 'blog',
            "blog" => $posts->get()
            // "blog" => $posts->paginate(7)->withQueryString()
            //  post_data::all()
            // $posts->paginate(7)->withQueryString() //meminta semua data tertentu di model
        ]);  
    }

    public function show(post_data $post)
    {
        return view('singleblog_view', [
            "title" => "Single post",
            "active" => 'blog',
            "singleblog_view" => $post
        ]);
    }
}
