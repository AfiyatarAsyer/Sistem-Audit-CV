@extends('layouts.mainmain')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
      {{-- jika berhasil tampilkan ini --}}
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{-- {{ session('success') }} --}}
        Yeay!.. Registration successfull! Please login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

      {{-- jika tidak berhasil tampilkan erorr ini --}}
      @if(session()->has('Error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{-- {{ session('success') }} --}}
        "Login failed!"
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
    <form action="/login" method="post">
      @csrf
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      {{-- form email --}}
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid 
        @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      {{-- form password --}}
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
  </main>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 


@endsection