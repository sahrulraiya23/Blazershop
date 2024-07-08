<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

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
            <li class="nav-item">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ourproduct">Our Products</a>
            </li>
            <li class="nav-item active">
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>blog us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <div class="section-heading">
              <h2 style="text-align: center;">Blog</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/11.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4 style="font-size: 20px;">Blazer Wanita</h4>
              <p style="font-size: 18px;">Blazer merupakan salah satu busana multi fungsi yang bisa digunakan dalam berbagai kesempatan, 
              untuk bekerja, bergaul hingga pesta. Sebenarnya blazer tidak harus selalu dipadukan dengan kemeja atau celana bahan. 
              Anda juga bisa memadukannya dengan jeans hingga celana pendek. 
              Perhatikan cara memilih blazer karena terdapat beberapa jenis yang berbeda sesuai dengan kesan yang ingin ditampilkan. 
              Berdasarkan tren fashion saat ini, anda dapat menggunakan blazer tidak hanya untuk pergi ke kantor, 
              tetapi anda juga dapat menggunakannya untuk pakaian sehari-hari. 
              Anda dapat menambahkan blazer santai pada busana yang anda kenakan dan anda bisa mendapatkan penampilan yang berbeda dengan busana kasual biasa. Sebagai wanita, anda harus mengerti jenis-jenis blazer, agar anda bisa memilih blazer mana yang cocok untuk bekerja dan mana yang cocok untuk hang out.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/14.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4 style="font-size: 20px;">Blazer Pria</h4>
              <p style="font-size: 18px;"> Blazer Pria atau Men Blazer, 
              busana ini bentuknya menyerupai blazer untuk pria dan memiliki ukuran yang besar. 
              Tak ada ada lekukan yang jelas terlihat, karena blazer ini memiliki potongan yang lurus. 
              Blazer ini sangat cocok dikenakan saat bekerja karena terlihat formal dan profesional. 
              Blazer ini semakin populer digunakan oleh wanita, karena dapat menciptakan tampilan modis tanpa terlalu terlihat feminim. 
              Blazer ini juga cocok dikombinasikan dengan kemeja dan jeans atau terusan atau gaun kasual. 
              Dan untuk mendapatkan penampilan yang berbeda, anda dapat menambahkan belt dengan warna yang sesuai untuk menghias busana anda .</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

  <footer>
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
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
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
