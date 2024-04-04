<!doctype html>
<html lang="en">
@include('partials.navbar')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI CV.Ardavirisa | {{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  {{-- boostrap icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  {{-- My Style --}}

  {{-- <link rel="stylesheet" href="/semuacss/style.css"> --}}
  {{-- <link rel="stylesheet" href="css/styleme.css"> --}}
  <link rel="stylesheet" href="css/stylemain.css">

  {{-- parallax JS --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/parallax.js/parallax.js"></script>

</head>

<body>
  {{-- Header --}}
  <header class="parallax-window" data-parallax="scroll" data-image-src="/img/catholicpicture.jpg">
    <div class="container mt-4">
      @yield('container')
    </div>

    {{-- <div class="header-title"><h1>Gereja Santo Fransiskus Xaverius</h1></div>
        <div class="header-bottom " >
            <p class="today-date">28 <span>/ 08</span></p> --}}
  </header>

  {{-- About --}}


  {{-- JQuery --}}
  <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="js/gsgd.co.uk_sandbox_jquery_easing_jquery.easing.1.3.js"></script>
  <script src="js/parallaxone.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
{{-- footer --}}
{{-- <footer>
    Dibuat dengan <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
      <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
    </svg> oleh Virgelius Hendrawan Taralandu
  </footer> --}}

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  <div class="col-md-4 d-flex align-items-center">
    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
      <svg class="bi" width="30" height="24">
        <use xlink:href="#bootstrap" />
      </svg>
    </a>
    <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
  </div>

  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#twitter" />
        </svg></a></li>
    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#instagram" />
        </svg></a></li>
    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#facebook" />
        </svg></a></li>
  </ul>
</footer>

</html>