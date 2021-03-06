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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>River Side-Trek in Dandeli</title>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                        <a class="box" href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Camping Tent Stay.">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a class="box" href="https://www.instagram.com/trek_in_dandeli/">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>

                    <!-- navigation-top-right -->

                    <div class="navigation-top-right">
                        
                        
                       
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

                        <!-- navigation-left -->

                        <ul class="navigation-left">
                            
                        </ul>

                        <!-- navigation-right -->

                        <ul class="navigation-right">
                            <li>
                                <a href="index.php">Home <span class="open-dropdown"></span></a>
                                
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

        <!-- ========================  Room ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">River Side Camping</h2>
                    <p>Available At Low Price</p>
                </div>
            </div>

            <div class="room">

                <!-- === Room gallery === -->

                <div class="room-gallery">
                    <div class="container">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url(assets/images/d.jpg)">
                                <img src="assets/images/room-4.jpg" alt="" />
                            </div>

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url(assets/images/ss3.jpg)">
                                <img src="assets/images/room-2.jpg" alt="" />
                            </div>


                            <!-- === slide item === -->

                            <div class="item" style="background-image:url(assets/images/4.jpeg)">
                                <img src="assets/images/room-1.jpg" alt="" />
                            </div>


                        </div> <!--/owl-slider-->

                    </div>
                </div> <!--/room-gallery-->
                <!-- === Booking === -->

                <div class="booking booking-inner">

                    <div class="container">

                        <div class="booking-wrapper">
                            <div class="row">

                               
                                <!--=== button ===-->

                                <div class="col-xs-12 col-sm-4">
                                    <a href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Camping Tent Stay." class="btn btn-clean">
                                        Book now
                                        <small>Best Prices Guaranteed</small>
                                    </a>
                                </div>

                            </div> <!--/row-->
                        </div><!--/booking-wrapper-->
                    </div> <!--/container-->
                </div> <!--/booking-->
                <!-- ===  Room overview === -->

                <div class="room-overview">

                    <div class="container">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <!-- === Room aminities === -->

                                <div class="room-block room-aminities">

                                    <h2 class="title">PACKAGE INCLUDES</h2>
                                    <p style="font-weight: bold; font-size: 20px; text-align: center;">Night stay in room with attached Washroom    <br>
                                    </p>
                                    
                               
                                    <h2 class="title">**Food**</h2>
                                    <p style="font-weight: 400; font-size: 20px; text-align: center; margin-top: 60px;">
                                       *Breakfast<br>
                                       *Lunch<br>
                                       *Tea/Coffee<br>
                                       *Dinner(Veg/Non-Veg)
                                    </p>

                                    <h2 class="title">**Activities Includes**</h2>
                                    <p style="font-weight: 400; font-size: 20px; text-align: center">
                                       *River Rafting<br>
                                       *Kayaking<br>
                                       *Boating<br>
                                       *Natural Jaccuzzi<br>
                                       *Archary<br>
                                       *Campfire with music<br>

                            
                                    </p>
                                       
                                    <h2 class="title">**site scenes**</h2>
                                    <p style="font-weight: 400; font-size: 20px; text-align: center">
                                       * Synteri Rocks<br>
                                       * SUPA Dam(Outer View)<br>
                                       * Back Waters<br>
                                       * Moulangi Eco Park<br>  
                                       * Crocodile park<br>
                                       * Honey Park<br>
                                       * (Water activities are based on the water level. if Rafting does not  happen then zip line will be given as an 
                                           alternative )<br>
                                          NOTE:<br>
                                       * The price mentioned is for per person/per Night.<br>
                                       * Age between 6 to 10  years children is charged half of the adult price.<br>
                                       * Additional activities are extra cost.<br>
                                       * Transportation/sightseeing entry fees are not included.<br>
                                       * Sightseeing ticket price between 10 to 50/-.<br>
                                       * Sightseeing can be visited by your own transportation; else we arrange transportation at an additional cost.<br>          
                                    </p> 



                                
                                <!-- === Room block === -->

                               

                                
                            </div> <!--/col-sm-10-->
                        </div> <!--/row-->
                    </div> <!--/container-->
                </div> <!--/room-overview-->
            </div>

        </section>

        <!-- ========================  Blog ======================== -->

        <section class="blog blog-widget">

            <!-- === stretcher header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Activities Includes</h2>
                    <p style="font-weight: 400; font-size: 20px;">River Rafting (1km)
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/zorbing.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Zorbing
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/kayaking.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Kayaking 
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/Boating.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Boating 
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/jacuzzi.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Natural Jacuzzi
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/archary.jpg" alt="" style="height: 437px;" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Archery
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- === article item === -->

                    <div class="col-sm-4">
                            <article>
                                <div class="image">
                                    <img src="assets/images/firecamp.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h2 class="h3 title">
                                        Campfire with music
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                </div> <!--/row-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Stretcher widget ======================== -->

       

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
                            <a href="facility.html">Anchor link</a>
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
                            <a href="facility.html">Anchor link</a>
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
                            <a href="facility.html">Anchor link</a>
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
                            <a href="facility.html">Anchor link</a>
                        </li>
        
                        <!-- === stretcher item more === -->
        
                        <li class="stretcher-item more">
                            <div class="more-icon">
                                <span data-title-show="Show more" data-title-hide="+"></span>
                            </div>
                            <a href="facility.html">Anchor link</a>
                        </li>
        
                    </ul>
                </section>

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
                            <li><a href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Camping Tent Stay."><i class="fa fa-whatsapp"></i></a></li>
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
</body>

</html>