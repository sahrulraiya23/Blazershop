<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>7Light Blazershop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <style>
    .page-link:hover {
    z-index: 2;
    color: red;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6;
    }

    .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: red;
    border-color: red;
    }
    
    .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: red;
    background-color: #fff;
    border: 1px solid #dee2e6;
    }
  </style>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
          <h2>7Light <em>Shop</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ourproduct">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
          
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('showcart')}}">
                <i class="fas fa-shopping-cart"></i>
                Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            
            @endguest
            
          </ul>
        </div>
      </div>
    </nav>
    @if(session()->has('message'))

    <div class="alert alert-success">


      <button type="button" class="close" data-dismiss="alert">x</button>

      {{session()->get('message')}}

    </div>

    @endif
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>Best Offer</h4>
          <h2>New Arrivals On Sale</h2>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h4>Flash Deals</h4>
          <h2>Get your best products</h2>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h4>Last Minute</h4>
          <h2>Grab last minute deals</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  @include('user.product')
  
  @include('user.userblog')



  <a href="https://api.whatsapp.com/send?phone=62895383118285">
    <img src="https://hantamo.com/free/whatsapp.svg" class="wabutton" alt="Whatsapp-Button" />
  </a>
  <style>
  .wabutton{
    width:50px;
    height:50px;
    position:fixed;
    bottom:30px;
    right:30px;
    z-index:100;
  }
  </style>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

<footer>
  <br>
  <br>
<div class="footer-dark">
        
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="/ourproduct">Our Product</a></li>
                            <li><a href="/blog">Blog Us</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Dimas Tri Atmojo</a></li>
                            <li><a href="#">Meilani</a></li>
                            <li><a href="#">M. Saharullah Raiya</a></li>
                            <li><a href="#">Niken Berlin Pratama</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>PT. Tujuh Cahaya Teknologi</p>
                    </div>
                    <div class="col item social" style="margin-top: 30px;">
                      <a href="#"><i class="icon ion-social-facebook"></i></a>
                      <a href="#"><i class="icon ion-social-twitter"></i></a>
                      <a href="http://wa.me/6281314652586"><i class="icon ion-social-whatsapp"></i></a>
                      <a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p>Copyright &copy; 2022 7LIGHT Blazershop</p>
            </div>
      
    </div>
</footer>

</html>