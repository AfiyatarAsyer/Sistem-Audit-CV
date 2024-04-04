@extends('dashboard.layouts.mainsb')
<link href="/css/stylessb.css" rel="stylesheet"/>

@section('container')
<br>
<h3 style="text-align: center;">Form Update data Keuangan</h3>
<br><br>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

         <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            

        {{-- FORM KEUANGAN --}}
        <div class="col-lg-10">
                <form method="post" action="/updatedatakeu/{{ $data->id }}" class="mb-5" enctype="multipart/form-data">
                    @csrf

                    
                    <div class="mb-3 shadow">
                    <label for="name" class="form-label"><b>Nama Keuangan</b></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $data->name }}" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror    
                    </div>
                    
                    <div class="mb-3 shadow">
                        <label for="pemasukan" class="form-label"><b>Jumlah Pemasukan</b></label>
                        <input type="text" class="form-control @error('pemasukan') is-invalid @enderror" id="pemasukan" name="pemasukan" value="{{ $data->pemasukan }}"  required>
                    @error('pemasukan')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror  
                    </div>


                    <div class="mb-3 shadow">
                        <label for="pengeluaran" class="form-label"><b>Jumlah pengeluaran</b></label>
                        <input type="text" class="form-control @error('pengeluaran') is-invalid @enderror" id="pengeluaran" name="pengeluaran" value="{{ $data->pengeluaran }}" required>
                    @error('pengeluaran')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror  
                    </div>

                    <h6 style="color: crimson">Peringatan!!</h6><h6>1. jumlah pemasukan dan pengeluaran tidak memakai tanda titik (.) ataupun koma(,) </h6>
                    <h6>2. contoh penulisan angka ribuan (3000) angka ratusan (3000000) jutaan (3000000) </h6>



                    <!-- {{-- <div class="mb-3">
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
                    </div> --}}
{{--  -->
                    <!-- <div class="mb-3">
                        <label for="image" class="form-label">masukan gambar (optional jika diperlukan)</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror
                      </div> --}} -->

                    <!-- {{-- <div class="mb-3 ">
                        <label for="body" class="form-label">Body</label>
                        <textarea type="text" class="form-control @error('body') is-invalid @enderror" textarea name="body" id="body" required value="{{ old('body') }}" 
                        cols="30" rows="10">
                        </textarea>
                        @error('body')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror 
                    </div> --}} -->



                    
                    <button type="submit" class="btn btn-primary">Update data</button>
                    <button class="btn btn-primary" style="background-color: blanchedalmond"><a href="/dashboard/createkeuangan">Batal</a></button>
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