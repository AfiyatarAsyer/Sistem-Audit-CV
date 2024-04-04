

@extends('layouts.mainmain')


@section('container')


    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
            <h1 class="mb-3">{{ $singleblog_view->title }}</h1>

            
    <p> <a href="/authors/{{ $singleblog_view->user->username }}" class="text-decoration-none">{{ $singleblog_view->User->name }}</a>
        <a href="/categories/{{ $singleblog_view->category->slug}}"class="text-decoration-none">{{ $singleblog_view->category->name }}</a></p>

        {{-- @if ($singleblog_view->image)

            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$singleblog_view->image) }}" alt="{{ 
                $singleblog_view->category->name ?? 'none' }}" class="img-fluid">
            </div> --}}
            
            {{-- @else --}}
            <img src="/img/announcement.jpg" class="img-fluid" alt="img/announcement.jpg">
                {{-- <img src="https://source.unsplash.com/1200x400?{{ $singleblog_view->category->name ?? 'none' }}" alt="{{ 
                $singleblog_view->category->name ?? 'none' }}" class="img-fluid"> --}}
            {{-- @endif --}}

        
            <article class="my-3 fs-5">
                
             {!! $singleblog_view->body !!}

            </article>

            <br>
            <br>

 <button class="btn btn-primary" style="background-color: blanchedalmond"><a href="/blogweb">kembali</a></button>

    {{-- <a href="/blogweb" class="d-block mt-5">Kembali</a> --}}
            </div>
        </div>
       

    </div>

   

@endsection