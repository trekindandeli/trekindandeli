<?php
    session_start();
    if(!isset($_SESSION['email'])){
        echo "You are logged out,Login again...";
        header('location: reservation-2.php');
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Trek in Dandeli</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="css/animate.css" />
    <link rel="stylesheet" media="all" href="css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="css/hotel-icons.css" />
    <link rel="stylesheet" media="all" href="css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="css/datepicker.css" />
    <link rel="stylesheet" media="all" href="css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">

    <!--fontawesome-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "7349750760", // WhatsApp number
            call: "9901273171", // Call phone number
            
            button_color: "rgb(13, 120, 241)", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


</head>

<body>
   
    <div class="page-loader"></div>

    <div class="wrapper">

        <header>

            <!-- ======================== Navigation ======================== -->

            <div class="container">

                <!-- === navigation-top === -->

                <nav class="navigation-top clearfix">

                    <!-- navigation-top-left -->

                    <div class="navigation-top-left">
                        <a class="box" href="https://www.facebook.com/Trek-in-Dandeli-110298803793141/">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="box" href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Trek in Dandeli .">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a class="box" href="https://www.instagram.com/trek_in_dandeli/">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>

                    
                </nav>

                <!-- === navigation-main === -->

                <nav class="navigation-main clearfix">

                    <!-- logo -->

                    <div class="logo animated fadeIn">
                        <a href="index.php">
                            <img class="logo-desktop" src="assets/images/trek.png" alt="Alternate Text" />
                            <img class="logo-mobile" src="assets/images/trek.png" alt="Alternate Text" />
                        </a>
                    </div>

                    <!-- toggle-menu -->

                    <div class="toggle-menu"><i class="icon icon-menu"></i></div>

                    <!-- navigation-block -->

                    <div class="navigation-block clearfix">

                    <ul class="navigation-left">
                    <li style="padding: 10px; ">

                        <p style="color: #fff; font-weight: 500; font-size: 20px; margin-left: -30px;"><i class="icon icon-user">  </i><?php echo $_SESSION['email'];?></p>
                    </li>
                    </ul>

                        <!-- navigation-right -->

                        <ul class="navigation-right">
                            <li>
                                <a href="#Home">Home <span class="open-dropdown"></span></a>
                                <!-- <ul>
                                    <li><a href="index.html">Home - Booking intro</a></li>
                                    <li><a href="index-2.html">Home - Booking box</a></li>
                                    <li><a href="index-3.html">Home - Rooms intro</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="#">Packages <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <ul>
                                    <li><a href="#Trending">Trending Packages</a></li>
                                    <li><a href="#Holiday">Holiday Packages</a></li>
                                    <li><a href="#Popular">Popular Packages</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>

                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            
                            <li>
                                <form action="logout.php" method="post">
                                    <input type="submit" value="logout" class="btn btn-clean" name="logout">
                                </form>
                            </li>
                        </ul>

                    </div> <!--/navigation-block-->

                </nav>
            </div> <!--/container-->

        </header>

        <!-- ========================  Header content ======================== -->

        <section class="frontpage-slider" id="Home">
            <div class="owl-slider owl-slider-header owl-slider-fullscreen">

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/1546328.jpg)">
                    <div class="box text-center">
                        <div class="container">
                            <div class="rating animated" data-animation="fadeInDown">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                Welcome To<br /> <span>Trek In Dandeli</span>
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                Make Your Holidays More Happening
                            </div>
                            <div class="desc animated" data-animation="fadeInUp">
                                Lowest Price Guaranteed...!
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/1546328.jpg)">
                    <div class="box text-center">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                The privacy and <br />
                                individuality of a custom
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                The Residences have their own dedicated private entrance as well <br />
                                as an anonymous "celebrity" entrance, for ultimate privacy.
                            </div>
                            <div class="animated" data-animation="fadeInUp">
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/1546331.jpg);">
                    <div class="box text-center">
                        <div class="container">
                            <div class="rating animated" data-animation="fadeInDown">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h2 class="title animated h1" data-animation="fadeInDown">Fairmont managed!</h2>
                            <div class="desc animated" data-animation="fadeInUp">The elegant Champagne Bar, the stylish Colina Club.</div>
                            <div class="desc animated" data-animation="fadeInUp">Guestrooms and luxurious suites</div>
                            <div class="animated" data-animation="fadeInUp">
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--/owl-slider-->
        </section>

        <!-- ======================== Booking ======================== -->

        <section class="booking booking-inner">

            <div class="section-header hidden">
                <div class="container">
                    <h2 class="title">Booking & reservations</h2>
                </div>
            </div>

            <div class="booking-wrapper">

                <div class="container">
                    <div class="row">
                        <form action="booking.php" method="post">
                        <!--=== date arrival ===-->

                        <div class="col-xs-4 col-sm-3">
                            
                            <div class="date" data-text="Arrival">
                                <input class="btn btn-clean" type="date" name="arrival" required="required"/>
                                <div class="date-value"></div>
                            </div>
                        </div>

                        <!--=== date departure ===-->

                        <div class="col-xs-4 col-sm-3">
                            <div class="date"  data-text="Departure">
                                <input class="btn btn-clean" type="date" name="departure" required="required"/>
                            </div>
                        </div>

                        <!--=== guests ===-->

                        <div class="col-xs-4 col-sm-2">

                            <div class="guests" data-text="Guests">
                                <div class="result">
                                    <input class="qty-result" type="text" value="2" id="qty-result" readonly="readonly" name="guest"/>
                                    <div class="qty-result-text date-value" id="qty-result-text"></div>
                                </div>
                                <!--=== guests list ===-->
                                <ul class="guest-list">

                                    <li class="header">
                                        Please choose number of guests <span class="qty-apply"><i class="icon icon-cross"></i></span>
                                    </li>

                                    <!--=== adults ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="2" type="text" id="ticket-adult" data-value="2" readonly="readonly" name="adult" />
                                        </div>

                                        <div>
                                            <span>Adults <small>16+ years</small></span>
                                        </div>

                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-adult" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-adult" />
                                        </div>

                                    </li>

                                    <!--=== childrens ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="0" type="text" id="ticket-children" data-value="0" readonly="readonly" name="children"/>
                                        </div>

                                        <!--=== Label ===-->

                                        <div>
                                            <span>Children <small>2-11 years</small></span>
                                        </div>


                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-children" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-children" />
                                        </div>

                                    </li>

                                    <!--=== Infants ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="0" type="text" id="ticket-infants" data-value="0" readonly="readonly" name="infant"/>
                                        </div>

                                        <!--=== Label ===-->

                                        <div>
                                            <span>Infants <small>Under 2 years</small></span>
                                        </div>

                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-infants" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-infants" />
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    

                        <!--=== button ===-->

                        <div class="col-xs-12 col-sm-4">
                            <input type="submit" value="Book Now" class="btn btn-clean" name="Submit">
                        </div>
                    </form>
                    
                    </div> <!--/row-->
                </div><!--/booking-wrapper-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Rooms ======================== -->

        <section class="rooms rooms-widget" id="Trending">

            <!-- === rooms header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Trending Tours</h2>
                    <p></p>
                </div>
            </div>

            <!-- === rooms content === -->

            <div class="container">

                <div class="owl-rooms owl-theme">

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="assets/images/grouppackage.jpg" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="grouppackage.php">Group Package</a></h3>
                                    <p>23 hrs Package
                                    </p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="grouppackage.php" class="btn btn-main">Click Here</a>
                                    </div>
                                    <div>
                                        <span class="price h4">Rs 1449/-</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="assets/images/daypackage.jpg" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="daypackage.php">Day Package</a></h3>
                                    <p>1 Day</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="daypackage.php" class="btn btn-main">Click Here</a>
                                    </div>
                                    <div>
                                        <span class="price h4">Rs 899/-</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="assets/images/couplepackage.jpg" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="couplepackage.php">Couple Package</a></h3>
                                    <p>2 Days 1 Night(24hr)</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="couplepackage.php" class="btn btn-main">Click Here</a>
                                    </div>
                                    <div>
                                        <span class="price h4">Rs 2200/-</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="assets/images/wateractivities.jpg" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="wateractivity.php">water activities</a></h3>
                                    <p>1 Day</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="wateractivity.php" class="btn btn-main">Click Here</a>
                                    </div>
                                    <div>
                                        <span class="price h4">Rs 699/-</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="assets/images/studentpackage.jpg" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="student package.php">Student  Package</a></h3>
                                    <p>23 hrs Package
                                       
                                    </p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="student package.php" class="btn btn-main">Click Here</a>
                                    </div>
                                    <div>
                                        <span class="price h4">Rs 1350/-</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div><!--/owl-rooms-->

            </div> <!--/container-->

        </section>



        <!-- ========================  Blog ======================== -->

        <section class="blog blog-widget" id="Holiday">

            <!-- === stretcher header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Holiday Packages</h2>
                    <p>
                        Events, place to go, tour
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="camping tentstay(holiday).php">
                            <article>
                                <div class="image">
                                    <img src="assets/images/tentstay2.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h1>Camping tent Stay</h1>
                                    <h2 class="h4 title">
                                        Package Cost: 1599/-
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="woodencottage.php">
                            <article>
                                <div class="image">
                                    <img src="assets/images/wooden1.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h1>Wooden Cottages</h1>
                                    <h2 class="h4 title">
                                        Package Cost: 1799/-
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="rooms.php">
                            <article>
                                <div class="image">
                                    <img src="assets/images/rooms.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h1>Rooms</h1>
                                    <h2 class="h4 title">
                                        Package Cost: 2499/-
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                </div> <!--/row-->
            </div> <!--/container-->
        </section>


                <!-- ========================  Stretcher widget ======================== -->

                <section class="stretcher-wrapper">

                    <!-- === stretcher header === -->
        
                    <div class="section-header">
                        <div class="container">
                            <h2 class="title">Adventurous activities</h2>
                            <p>
                                With the best experiences 
                            </p>
                        </div>
                    </div>
        
                    <!-- === stretcher === -->
        
                    <ul class="stretcher">
        
                        <!-- === stretcher item === -->
        
                        <li class="stretcher-item" style="background-image:url(assets/images/1546331.jpg);">
                            <!--logo-item-->
                            <div class="stretcher-logo">
                                <div class="text">
                                    <span class="text-intro h4">Trekking</span>
                                </div>
                            </div>
                            <!--main text-->
                            <figure>
                                <h4>Trekking</h4>
                                <figcaption>Unparalleled devotion to luxury</figcaption>
                            </figure>
                            <!--anchor-->
                        </li>
        
                        <!-- === stretcher item === -->
        
                        <li class="stretcher-item" style="background-image:url(assets/images/2.jpeg);">
                            <!--logo-item-->
                            <div class="stretcher-logo">
                                <div class="text">
                                    <span class="text-intro h4">Rafting</span>
                                </div>
                            </div>
                            <!--main text-->
                            <figure>
                                <h4>Rafting</h4>
                                <figcaption>Care about results</figcaption>
                            </figure>
                            <!--anchor-->
                        </li>
        
                        <!-- === stretcher item === -->
        
                        <li class="stretcher-item" style="background-image:url(assets/images/3.jpeg);">
                            <!--logo-item-->
                            <div class="stretcher-logo">
                                <div class="text">
                                    <span class="text-intro h4">Kayaking</span>
                                </div>
                            </div>
                            <figure>
                                <h4>Kayaking</h4>
                                <figcaption>Your daily activities</figcaption>
                            </figure>
                            <!--anchor-->
                        </li>
        
                        <!-- === stretcher item === -->
        
                        <li class="stretcher-item" style="background-image:url(assets/images/firecamp1.jpg);">
        
        
                            <!--logo-item-->
                            <div class="stretcher-logo">
                                <div class="text">
                                    <span class="text-intro h4">Fire Camping</span>
                                </div>
                            </div>
                            <!--main text-->
                            <figure>
                                <h4>Fire Camping</h4>
                                <figcaption>Best experiences</figcaption>
                            </figure>
                            <!--anchor-->
                        </li>
        
                        <!-- === stretcher item more === -->
        
                        <li class="stretcher-item more">
                            <div class="more-icon">
                                <span data-title-show="Show more" data-title-hide="+"></span>
                            </div>
                        </li>
        
                    </ul>
                </section>

        <!-- ========================  Cards ======================== -->

        <section class="cards">

            <!-- === cards header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Sightseens In Dandeli </h2>
                    <p></p>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- === item === -->

                    <div class="col-xs-12 col-md-8">
                        <figure>
                            <figcaption style="background-image:url(assets/images/waterback.jpg)">
                                <img src="assets/images/waterback.jpg" alt="" />
                            </figcaption>
                            <a href="" class="btn btn-clean">Supa back water</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/images/Dinsepark.jpg)">
                                <img src="assets/images/activity-2.jpg" alt="" />
                            </figcaption>
                            <a href="" class="btn btn-clean">Dinsepark</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/images/Crocodile\ Park.jpg">
                                <img src="assets/images/activity-3.jpg" alt="" />
                            </figcaption>
                            <a href="" class="btn btn-clean">Crocodile Park</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/images/SupaDam.jpg)">
                                <img src="assets/images/activity-4.jpg" alt="" />
                            </figcaption>
                            <a href="" class="btn btn-clean">Supa Dam</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/images/Syntheri\ Rocks.jpg)">
                                <img src="assets/images/activity-5.jpg" alt="" />
                            </figcaption>
                            <a href="" class="btn btn-clean">Syntheri Rocks </a>
                        </figure>
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->
        </section>


        <!-- ======================== Image blocks ======================== -->
        <section class="image-blocks image-blocks-header" id="Popular">

            <div class="section-header" style="background-image:url(assets/images/1546331.jpg)">
                <div class="container">
                    <h2 class="title">Popular Packages</h2>
                    
                </div>
            </div>

            <div class="container">

                <!--item block -->
                <div class="blocks blocks-left">
                    <div class="item">
                        <div class="text">

                            <!-- === room info === -->

                            <h2 class="title" style="font-size: 80px;">Poolview<br/>Resort</h2>
                            

                            <!-- === room facilities === -->

                            <div class="room-facilities">

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Food</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Water activities</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Sight seens</figcaption>
                                </figure>

                                

                            </div>

                            <!-- === booking === -->

                            <div class="book">
                                <div>
                                    <a href="poolview.php" class="btn btn-danger btn-lg">Click Here </a>
                                </div>
                                <div>
                                    <span class="price h2">Rs 3599/-</span>
                                    
                                </div>
                            </div> <!--/booking-->

                        </div><!--/text-->
                    </div> <!--/item-->

                    <div class="image" style="background-image:url(assets/images/a.jpg)">
                        <img src="assets/images/a.jpg" alt="" />
                    </div>
                </div>

                <!--item block -->
                <div class="blocks blocks-right">
                    <div class="item">
                        <div class="text">

                            <!-- === room info === -->

                            <h2 class="title" style="font-size: 80px;">luxurious <br />Resort</h2>
                            

                            <!-- === room facilities === -->

                            <div class="room-facilities">

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Food</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Water activities</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Sight seens</figcaption>
                                </figure>

                            </div>

                            <!-- === booking === -->

                            <div class="book">
                                <div>
                                    <a href="luxuriousResort.php" class="btn btn-danger btn-lg">click Here</a>
                                </div>
                                <div>
                                    <span class="price h2">Rs 5499/-</span>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="image" style="background-image:url(assets/images/ss2.jpg)">
                        <img src="assets/images/apartment-2.jpg" alt="" />
                    </div>
                </div>

                <!--item block -->
                <div class="blocks blocks-left">
                    <div class="item">
                        <div class="text">

                            <!-- === room info === -->

                            <h2 class="title" style="font-size: 80px;">Trek In<br/>Dudhsagar</h2>
                        
                            <!-- === room facilities === -->

                            <div class="room-facilities">

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Food</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Water activities</figcaption>
                                </figure>

                                <!--=== icon ===-->

                                <figure>
                                    <figcaption style="font-size: 20px; font-weight: 500;">Sight seens</figcaption>
                                </figure>

                                

                            </div>

                            <!-- === booking === -->

                            <div class="book">
                                <div>
                                    <a href="Trekindandeli.php" class="btn btn-danger btn-lg">click Here</a>
                                </div>
                                <div>
                                    <span class="price h2">Rs 4999/-</span>
                                    
                                </div>
                            </div> <!--/booking-->

                        </div><!--/text-->
                    </div> <!--/item-->

                    <div class="image" style="background-image:url(assets/images/dudhsagar.jpg)">
                        <img src="assets/images/apartment-1.jpg" alt="" />
                    </div>
                </div>

            </div> <!--/container-->
        </section>

        <!-- ======================== Quotes ======================== -->

        
        <!-- ========================  Subscribe ======================== -->

        <section class="subscribe">
            <div class="container">
                
            </div>
        </section> 

        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

               

                <!--footer social-->

                <div class="footer-social">
                    <div class="row">
                        <div class="col-sm-12 text-center hidden">
                            <a href="" class="footer-logo"><img src="assets/images/logo.png" alt="Alternate Text" /></a>
                        </div>
                        <div class="col-sm-12 icons">
                            <ul>
                                <li><a href="https://www.facebook.com/Trek-in-Dandeli-110298803793141/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Trek in dandeli."><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/trek_in_dandeli/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.bootstrap.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.owl.carousel.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 900
});
    </script>
</body>

</html>















