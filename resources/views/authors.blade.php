@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post categories (MASIH HALAMAN DAMI!!!!!!)</h1>
    
@foreach ($user as $category)

<ul>
    <li>
        <h2><a href="authors/{{ $category->user->id }}"class="text-decoration-none">{{ $category->user->name }}</a></h2>
    </li>
</ul>

{{-- 
<h3>
    By.<a href="/authors/{{ $datablog->user->id }}"class="text-decoration-none">{{ $datablog->user->name }}
</h3> --}}


    
@endforeach
    
@endsection



{{-- 

@extends('layouts.main')


@section('container')

    <p>HALOO SAYA BARU</p>

    @foreach($blog as $bloging)

    <article class="mb-5 border-bottom pb-4">

        <p>By.<a href="/authors/{{ $bloging->user->id }}"class="text-decoration-none">{{ $bloging->user->name }}</a></p>

             <a href="/blogweb" class="d-block mt-5">Back To Blog</a>

    </article>

    @endforeach

   
@endsection --}}