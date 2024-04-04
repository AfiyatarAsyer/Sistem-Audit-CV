

@extends('layouts.mainmain')

@section('container')
<h1 class="mb-5">Berdasarkan Kategori : </h1>



<div class="category">

    <div class="row">
    @foreach($categories as $category)

{{-- 
    @if ()
        
    @else
        
    @endif --}}

        {{-- @if($category->count()) --}}
{{-- 

            @if($category->slug['Pembaptisan'])
            <img src="catholicpicture.jpg" alt="catholicpicture.jpg">

            @else
            <div style="max-height: 400px; overflow:hidden;">
                <img src="img/announcement.jpg" class="card-img-top" alt="img/announcement.jpg">

        @endif --}}
        
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug}}">
                <div class="card text-bg-dark">
                    @if ($category->slug=='Pembaptisan')
                        <img src="img/catholicpicture.jpg" class="card-img" alt="img/catholicpicture.jpg">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                    @else
                        <img src="img/announcement.jpg" class="card-img" alt="img/announcement.jpg">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                    @endif
                    
                </div>
             </a>
        </div> 
     @endforeach 
    </div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

{{-- 
<h3>
    By.<a href="/authors/{{ $datablog->user->id }}"class="text-decoration-none">{{ $datablog->user->name }}
</h3> --}}
{{-- <div class="d-flex justify-content-end">
    {{ $category->links() }}
    </div> --}}
@endsection
