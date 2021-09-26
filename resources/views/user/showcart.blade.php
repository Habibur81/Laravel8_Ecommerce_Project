<!DOCTYPE html>
<html lang="en">

  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <title> Friendd Shopping </title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--
        TemplateMo 546 Sixteen Clothing https://templatemo.com/tm-546-sixteen-clothing
        -->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
        <link rel="stylesheet" href="assets/css/owl.css">

        <style>
            .showcart{
                padding: 15vh !important;
            }
            .showcart thead{
                background-color: gray !important;
                color: white !important;
            }
        .showcart th{
            padding: 10px !important;
            text-align: center !important;
            font-size: 20px !important;
            font-weight: bold !important;
        }
        .showcart tbody{
            background-color: black !important;
            color: white !important;
        }


        .showcart tbody td{
            padding: 10px !important;
            text-align: center !important;
            font-size: 20px !important;
        }

        .showcart tfoot td{

            text-align: center !important;

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
                    <a class="navbar-brand" href="index.html"><h2> Friend <em> Shopping </em></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ourproduct')}}">Our Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>

                            @if (Route::has('login'))

                                    @auth

                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('showcart')}}">
                                                <i class="fa fa-shopping-cart"></i> Cart[{{$count}}]
                                            </a>
                                        </li>

                                        <x-app-layout>
                                        </x-app-layout>


                                    @else
                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                                        @if (Route::has('register'))
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth

                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <section class="showcart">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" aria-level="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}
                </div>
            @endif


            <form action="{{url('order')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <table align="center">
                    <thead>
                        <tr>
                            <th> Product Name </th>
                            <th> Quentity </th>
                            <th> Price </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $cart as $usercart )
                            <tr>
                                <td>
                                    <input type="text" name="productname[]" value="{{$usercart->product_title}}" hidden>
                                    {{$usercart->product_title}}

                                </td>
                                <td>
                                    <input type="number" name="quentity[]" value="{{$usercart->quentity}}" hidden>
                                    {{$usercart->quentity}}
                                </td>
                                <td>
                                    <input type="number" name="price[]" value="{{$usercart->price}}" hidden>
                                    {{$usercart->price}}
                                </td>
                                <td>
                                    <a onclick="return confirm('Are You Sure Delete This Product')"  class="btn btn-danger" href="{{url('deletecart', $usercart->id)}}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><button class="btn btn-success"> Confirm Order</button></td>
                        </tr>
                    </tfoot>
                </table>

            </form>
        </section>

        <footer style="background-color: black; color:white; bottom:0;" >
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="inner-content">
                    <p style="color:white;">Copyright &copy; 2021 Friends Shopping Co., Ltd.

                  - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank"> Habibur Rahman </a></p>
                  </div>
                </div>
              </div>
            </div>
        </footer




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

</html>
