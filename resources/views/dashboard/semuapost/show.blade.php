@extends('dashboard.layouts.main')

@section('container')
      

<div class="container">

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        {{-- <h1 class="mb-3">{{ $data->title }}</h1> --}}

        
<p> <a href="#" class="text-decoration-none">{{ $data->user->name ?? 'none' }}</a>
    <a href="/categories/{{ $data->category->slug ?? 'none' }}"class="text-decoration-none">{{ $data->category->name  ?? 'none' }}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{ $data->category->name ?? 'none' }}" alt="{{ 
    $data->category->name ?? 'none' }}" class="img-fluid">

    
        <article class="my-3 fs-5">
            
         {!! $data->body !!}

        </article>



<a href="/blogweb" class="d-block mt-5">Back To Blog</a>
        </div>
    </div>

</div>


@endsection