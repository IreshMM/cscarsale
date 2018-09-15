<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | C&S Car Sale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    {{-- <script type="text/javascript" src="js/jquery.cycle2.caption2.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
@include('auth.login_modal')


    <div class="wrapper">
        <header>

            <nav>

                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>

                <div class="logo">
                    <a href="#home" style="color: white">C&S CAR SALE</a>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="#buypage">BUY</a></li>
                        <li><a href="#sellpage">SELL</a></li>
                        <li><a href="#leasepage">LEASE</a></li>
                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                        <li id="login-btn"><a>LOGIN</a></li>
                    </ul>
                </div>
            </nav>

        </header>
    </div>
    <script type="text/javascript">
        // Menu-toggle button

        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>






    <div class="overlaycas" id="home">
        <img src="img\c&s.png">
</div>
        <div class="cycle-slideshow">

            <img src="img/slide1.png">
            <img src="img/slide2.png">
            <img src="img/slide3.png">
  </div>


            <!-- Photo Slider End

	<!--Buy-->
            <div id="buy">
                <button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 1650px;
    left: 1320px; height:80px; width:300px; background:#ff3000; font-size: 30px; z-index:0;">BUY VEHICLES</button>
                <!--	<img src="img/buybutton2.png" style="position:absolute">-->
            </div>
            <div id="buypage">
                <img src="img/buy.png" style="z-index:-100">
	</div>
                <!--Buy end-->

                <!--Sell-->
                <div id="sell">
                    <button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 2800px;
        left: 710px; height:100px; width:500px; background:#ff3000; font-size: 40px;z-index:0;">SELL VEHICLES</button>
                </div>
                <div id="sellpage">
                    <img src="img/sell.png" style="z-index:-100">
	</div>
                    <!--Sell end-->

                    <!--Leasing-->
                    <div id="lease">
                        <button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 3940px;
        left: 710px; height:100px; width:560px; background:#ff3000; font-size: 30px;z-index:0;">CALCULATE LEASING RATES</button>
                    </div>
                    <div id="leasepage">
                        <img src="img/leasing.png" style="z-index:-100">
	</div>
                        <!--Leasing end-->





                        <footer class="page-footer font-small stylish-color-dark pt-4">

                            <!-- Footer Links -->
                            <div class="container text-center text-md-left">

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-md-4 mx-auto">

                                        <!-- Content -->
                                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">C&S CAR SALE</h5>
                                        <p>One place for all of your Automobile needs.</p>

                                    </div>
                                    <!-- Grid column -->

                                    <hr class="clearfix w-100 d-md-none">

                                    <!-- Grid column -->
                                    <div class="col-md-2 mx-auto">

                                        <!-- Links -->
                                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">OUR SERVICES</h5>

                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#buypage">Buy</a>
                                            </li>
                                            <li>
                                                <a href="#sellpage">Sell</a>
                                            </li>
                                            <li>
                                                <a href="#leasepage">Lease</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Grid column -->

                                    <hr class="clearfix w-100 d-md-none">

                                    <!-- Grid column -->
                                    <div class="col-md-2 mx-auto">

                                        <!-- Links -->
                                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">JOIN US</h5>

                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('register') }}">Register</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>

                                        </ul>

                                    </div>
                                    <!-- Grid column -->

                                    <hr class="clearfix w-100 d-md-none">

                                    <!-- Grid column -->
                                    <div class="col-md-2 mx-auto">

                                        <!-- Links -->
                                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CONTACT US</h5>

                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#!">About Us</a>
                                            </li>

                                        </ul>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </div>
                            <!-- Footer Links -->

                            <hr>

                            <!-- Call to action -->
                            <ul class="list-unstyled list-inline text-center py-2">
                                <li class="list-inline-item">
                                    <h5 class="mb-1">Register for free</h5>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ route('register') }}" class="btn btn-danger btn-rounded">Sign up!</a>
                                </li>
                            </ul>
                            <!-- Call to action -->

                            <hr>

                            <!-- Social buttons -->
                            <ul class="list-unstyled list-inline text-center">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-fb mx-1">
              <i class="fa fa-facebook"> </i>
            </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-tw mx-1">
              <i class="fa fa-twitter"> </i>
            </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-gplus mx-1">
              <i class="fa fa-google-plus"> </i>
            </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-li mx-1">
              <i class="fa fa-linkedin"> </i>
            </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-dribbble mx-1">
              <i class="fa fa-dribbble"> </i>
            </a>
                                </li>
                            </ul>
                            <!-- Social buttons -->



                        </footer>

                        <!--Footer end-->



</body>

</html>
