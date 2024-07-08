<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Blazershop</title>

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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span cla3ss="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="/blog">Blog Us</a>
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
            
                        <li class="nav-item active">
                        <a class="nav-link" href="{{url('showcart')}}">
                            <i class="fa fa-shopping-cart"></i>
                         Cart (0)</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/" target="_blank">
                            Lihat Blog
                            </a>

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
    <div style="padding:100px;" align="center">
        <table>
            <tr style="background-color: aliceblue;">
                <td style="padding:10px;font-size:20px;">Product Name</td>
                <td style="padding:10px;font-size:20px;">Quantity</td>
                <td style="padding:10px;font-size:20px;">Price</td>
                <td style="padding:10px;font-size:20px;">Action</td>
            </tr>

            <form action="{{url('order')}}" method="GET">

                @csrf

            @foreach($cart as $carts)
            <tr style="background-color:darkgrey;">
                <td style="padding:10px; color:whitesmoke;">
                    
                    <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden=""> 

                    {{$carts->product_title}}

                </td>
                <td style="padding:10px; color:whitesmoke;">
                    
                    <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                    
                    {{$carts->quantity}}
                
                </td>
                <td style="padding:10px; color:whitesmoke;">
                
                    <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                
                    {{$carts->price}}
                
                </td>
                <td style="padding:10px; color:whitesmoke;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a></td>

            </tr>
            @endforeach
        </table>

        <a href="{{ URL::to('checkout') }}" class="btn btn-primary btn-block">
        Checkout
        </a>


        </form>
    </div>
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

</html>