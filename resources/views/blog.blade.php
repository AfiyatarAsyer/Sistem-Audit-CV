@extends('layouts.mainmain')

@section('container')
<h1 class="mb-5 text-center">{{ $title }}</h1>


<div class="row justify-content-center mb-3">
   <div class="col-md-6">
      <form action="/blogweb">
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Cari</button>
         </div>
      </form>
   </div>
</div>

@if ($blog->count())

<div class="card mb-3">

   @if ($blog[0]->image)

   <div style="max-height: 400px; overflow:hidden;">
      <img src="{{ asset('storage/'.$blog[0]->image) }}" alt="{{ 
               $blog[0]->category->name ?? 'none' }}" class="img-fluid">
   </div>

   @else
   <div style="max-height: 400px; overflow:hidden;">
      <img src="img/announcement.jpg" class="card-img-top" alt="img/announcement.jpg">
   </div>

   @endif


   <div class="card-body text-center">
      <h3 class="card-title"><a href="/blog/{{ $blog[0]->slug }}" class="text-decoration-none text-dark">{{ $blog[0]->title }}</a></h3>
      <p>
         <small class="text-body-secondary"> post oleh. <a href="/authors/{{ $blog[0]->user->username }}" class="text-decoration-none">{{ $blog[0]->user->name }}</a>
            in <a href="/categories/{{ $blog[0]->category->slug }}" class="text-decoration-none">{{ $blog[0]->category->name }}</a> {{ $blog[0]->created_at->diffForHumans() }} </small>
      </p>
      <p class="card-text">{{ $blog[0]->excerpt }}</p>
      <a href="/blog/{{ $blog[0]->slug }}" class="text-decoration-none btn btn-primary">Lihat Detail</a>

   </div>
</div>



<div class="container">

   <div class="row">

      @foreach($blog->skip(1) as $post)

      <div class="col-md-4 mb-3">
         <div class="card">
            <div class="position-absolute px-3 py-2 " style="background-color:rgba(0, 0, 0,0.7)">
               <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
            </div>

            {{--
            @if ($post->count())
               <img src="{{ asset('storage/'.$post->image) }}" alt="{{
               $post->category->name ?? 'none' }}" class="img-fluid">
            @else --}}
            <img src="img/announcement.jpg" class="card-img-top" alt="announcement.jpg">
            {{-- @endif --}}
            <div class="card-body">
               <h5 class="card-title">{{ $post->title }}</h5>
               <p>
                  <small class="text-body-secondary"> By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                     {{ $post->created_at->diffForHumans() }} </small>
               </p>
               <p class="card-text">{{$post->excerpt}}</p>
               <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Lihat Detail</a>
            </div>
         </div>
      </div>
      @endforeach
   </div>


</div>


{{-- @foreach ($blog->skip(1) as $post)
   <article class="mb-5 border-bottom pb-4">

      <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

<p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
   in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

<p>{{ $post->excerpt}}</p>

<a href="blog/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>



@endforeach --}}

@else
<p class="text-center fs-4">
   No Post Found.
</p>
@endif

<div class="d-flex justify-content-center">
   {{-- {{ $blog->links() }} --}}
</div>


@endsection