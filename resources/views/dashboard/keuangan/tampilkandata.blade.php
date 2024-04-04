@extends('dashboard.layouts.mainsb')
<link href="/css/stylessb.css" rel="stylesheet"/>
@section('container')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            

        {{-- TAMPILKAN POST --}}
        <div class="col-lg-8">

            <h1 class="h3 mb-0 text-gray-800">{{ $data->title }} </h1>

            {{-- <p> <a href="#" class="text-decoration-none">{{ $data->user->name ?? 'none' }}</a> --}}
            {{-- <p><a href="/categories/{{ $data->category->slug ?? 'none' }}"class="text-decoration-none">{{ $data->category->name  ?? 'none' }}</a></p> --}}

{{-- 
            @if ($data->image)

            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$data->image) }}" alt="{{ 
                $data->category->name ?? 'none' }}" class="img-fluid">
            </div> --}}
            
            {{-- @else --}}
                {{-- <img src="https://source.unsplash.com/1200x400?{{ $data->category->name ?? 'none' }}" alt="{{ 
                $data->category->name ?? 'none' }}" class="img-fluid"> --}}
            {{-- @endif --}}

            

            <article class="my-3 fs-5">
                        
                Terdapat Transaksi dengan nama Transaksi {!! $data->name !!} , jumlah pemasukan Rp.{!! number_format($data->pemasukan,2,',','.') !!} dan jumlah pengeluaran Rp.{!! number_format($data->pengeluaran,2,',','.') !!}

            </article>

            <button class="btn btn-primary" style="background-color: blanchedalmond"><a href="/dashboard/createkeuangan">kembali</a></button>
        </div>
    </div>


                {{-- <form method="post" action="" class="mb-5">
                    @csrf

                    
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror    
                </div>
                    
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror  
                    </div>


                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                           @foreach ($data as $category)
                        
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 ">
                        <label for="body" class="form-label">Body</label>
                        <textarea type="text" class="form-control @error('body') is-invalid @enderror" textarea name="body" id="body" required value="{{ old('body') }}" 
                        cols="30" rows="10">
                        </textarea>
                        @error('body')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror 
                    </div>



                    
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form> --}}

        </div>

        <script>
            const title = document.querySelector('#title');
            const slug  = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/dashboard/semuapost/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script>

       
        

@endsection