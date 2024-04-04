
   

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereja santo Fransiskus Xaverius | {{ $title }}</title>
    <link rel="stylesheet" href="css/styleme.css">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96p9sdNyeRssA==" 
    crossorigin="anonymous" />

    {{-- parallax JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/parallax.js/parallax.js"></script>
  </head>
  
  <body>

    {{-- Header --}}
    <header class="parallax-window" data-parallax="scroll" data-image-src="/img/catholicpicture.jpg">

        <nav>
            <h1 class="distancing-media">
                    <div><a href=""><h2>Indonesia</h2></div>
            </h1>
           <div>
            <a href="/login" class="btn-sign-up">Sign Up</a>
            </div>
        </nav>
        <div class="header-title"><h3>Gereja Santo Fransiskus Xaverius</h3></div>
        <div class="header-bottom " >
            <p class="today-date">28 <span>/ 08</span></p>
            <ul class="social-media">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
        
    </header>

    {{-- About --}}
    <section id="about">
        <div class="about-container">
            <div class="images-gallery">
                <div class="image-box">
                    <img src="img/work.jpg" alt="image">
                    <h2 class="bali">B</h2>
                </div>
                <div class="image-box">
                    <img src="img/logogereja.jpg" alt="image">
                    <h2 class="bali">A</h2>
                </div>
                <div class="image-box">
                    <img src="img/catholicpicture.jpg" alt="image">
                    <h2 class="bali">L</h2>
                </div>
                <div class="image-box">
                    <img src="img/2.jpg" alt="image">
                    <h2 class="bali">I</h2>
                </div>
            </div>
            <div class="about-info">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Sint vitae iure, quisquam fuga architecto distinctio voluptate 
                possimus ex enim non voluptatem tempore eveniet temporibus sit aperiam minima libero voluptates perspiciatis?
            </div>
        </div>
    </section>

    {{-- footer --}}

    <footer>
        Dibuat oleh Virgelius Hendrawan Taralandu
    </footer>

    {{-- JQuery --}}
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/gsgd.co.uk_sandbox_jquery_easing_jquery.easing.1.3.js"></script>
    <script src="js/parallaxone.js"></script>
  </body>

</html>