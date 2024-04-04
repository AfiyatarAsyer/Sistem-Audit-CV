@extends('dashboard.layouts.mainsb')
<link href="/css/stylessb.css" rel="stylesheet"/>
@section('container')

 <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    
        <!-- Topbar -->
        
        <!-- End of Topbar -->
    
        <!-- Begin Page Content -->
        
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 shadow">Welcome {{ auth()->user()->name }}</h1>

                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    

                    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                </div>

               

                

            </div>
            <!-- /.container-fluid -->
            

            <div class="table-responsive col-lg-10 shadow">
                <a href="/dashboard/keuangan/create" class="btn btn-primary mb-3">Tambah informasi keuangan +</a>
                {{-- <a href="/dashboard/keuangan/Exportfiles" class="btn btn-primary mb-3">Export File</a> --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>nama keuangan</th>
                            <th>pemasukan</th>
                            <th>pengeluaran</th>
                            <th>Action</th>
                            {{-- <th>Total</th> --}}
                        </tr>
                    </thead>
                    <tbody>
          
                        @foreach ($keuangans as $keuangan)

                       
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keuangan->name }}</td>
                            <td>Rp.{{ number_format($keuangan->pemasukan,2,',','.') }}</td>
                            <td>Rp.{{ number_format($keuangan->pengeluaran,2,',','.') }}</td>
                            <td>
                                <a href="/tampilkandatakeu/{{ $keuangan->id }}" class="badge bg-info">Lihat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                  </svg></a>
                                <a href="/editdatakeu/{{ $keuangan->id }}" class="badge bg-warning"> Edit   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg></a>
                                <form action="/deletekeu/{{ $keuangan->id }}"class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('anda yakin mau menghapus data?')"> Hapus     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>  
                                    </button>
                                </form>
                            </td>
                            {{-- <td></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                {{ $keuangans->links() }}
     </div>
        <!-- End of Main Content -->

        {{-- div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        
<p> <a href="#" class="text-decoration-none">{{ $post->user->name ?? 'none' }}</a>
    <a href="/categories/{{ $post->category->slug ?? 'none' }}"class="text-decoration-none">{{ $post->category->name  ?? 'none' }}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name ?? 'none' }}" alt="{{ 
    $post->category->name ?? 'none' }}" class="img-fluid">

    
        <article class="my-3 fs-5">
            
         {!! $post->body !!}

        </article>



<a href="/blogweb" class="d-block mt-5">Back To Blog</a>
        </div>
    </div>

    </div> --}}
    <!-- End of Content Wrapper -->
    {{-- <div class="d-flex justify-content-end"> --}}
       
        {{-- </div> --}}
        
 </div>
@endsection