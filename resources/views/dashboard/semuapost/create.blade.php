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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 shadow">Welcome {{ auth()->user()->name }}</h1>
            </div>
        {{-- FORM POST --}}
        <div class="col-lg-10">
                <form method="post" action="/dashboard/semuapost" class="mb-5" enctype="multipart/form-data">
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
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" disabled readonly>
                    @error('slug')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror  
                    </div>


                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                           @foreach ($categories as $category)
                            @if(old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
{{-- 
                    <div class="mb-3">
                        <label for="image" class="form-label">masukan gambar (optional jika diperlukan)</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror
                      </div> --}}

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



                    
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <button class="btn btn-primary" style="background-color: blanchedalmond"><a href="/dashboard/semuapost">kembali</a></button>
                </form>

        </div>

        <script>
            const title = document.querySelector('#title');
            const slug  = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/dashboard/semuapost/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });


        function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview') 

        imgPreview.style.display = 'block';
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

        }
        
        </script>

       
        

@endsection