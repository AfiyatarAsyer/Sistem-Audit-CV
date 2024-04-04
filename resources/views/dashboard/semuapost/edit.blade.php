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
            

        {{-- FORM POST --}}
        <div class="col-lg-10">
                <form method="post" action="/updatedata/{{ $data->id }}" class="mb-5" enctype="multipart/form-data">
                    @csrf

                    
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $data->body }}" required autofocus >
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror    
                </div>
                    
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" disabled readonly>
                    @error('slug')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror  
                    </div>


                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                           
                            <option value="1">web-programing</option>
                            <option value="2">game-design</option>
                            <option value="3">personal</option>
                           
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="image" class="form-label">masukan gambar (optional jika diperlukan)</label>
                        <input type="hidden" name="oldImage" value="{{ $data->image }}">
                        @if($data->image)
                        <img src="{{ asset('storage/'. $data->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror
                      </div>

                    {{-- <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                           @foreach ($data as $category)

                            
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="mb-3 ">
                        <label for="body" class="form-label">Body</label>
                        <textarea type="text" class="form-control @error('body') is-invalid @enderror" textarea id="body" name="body"  required cols="30" rows="10">{{ $data->body }}
                        </textarea>
                        @error('body')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror 
                    </div>



                    
                    <button type="submit" class="btn btn-primary">Update</button>

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