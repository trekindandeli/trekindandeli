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
    <title>About-Trek in Dandeli</title>

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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                        <a class="box" href="https://api.whatsapp.com/send?phone= 917349750760&amp;text=Give me further information about Treck in Dandeli.">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a class="box" href="https://www.instagram.com/trek_in_dandeli/">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>

                    

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

                </nav>
            </div> <!--/container-->

        </header>

        <!-- ======================== About ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">About Us</h2>
                    <p>The place, our services & our team</p>
                </div>
            </div>

            <div class="image-blocks image-blocks-category">

                <div class="container">
                    <div class="about">

                        <!--text-block-->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="text">
                                        <h2></h2>

                                        <!-- ===  Gallery === -->

                                        <div class="gallery">

                                            <div class="owl-slider owl-slider-gallery">

                                                
                                        </div>

                                        <p><strong class="text-center">Trek in Dandeli</strong></p>
                                        <p>
                                            We have a lot to sell and cater to all our visitors.
                                            Book your holiday packages customized to your taste , preference ,schedule & budget.
                                             We still have fantastic deals for students/corporate groups and discounts on weekdays call us to know more,
                                              conveniently book the resort of your choosing online without any hassle.
                                               You can easily browse the wide range of offerings, accommodation, facilities, room views and a number of other premium features.
                                                Our list will provide options to fit your luxurious or budgeted needs and will act as an easy guide.
                                                 We're trying to have the perfect mix between wilderness, coziness and adventure.
                                        </p>

                                        <h4>
                                            <img src="assets/images/jt.jpg" alt="Enjoy your precious life in Dandeli" />
                                        </h4>

                                        <p><strong class="text-center"></strong></p>
                                        <p>
                                            Swimming pool and Lake in our 2.5 Acres of land will give you pleasant environment and Unlimited Fun Adventure Activities at our Kingfisher Jungle Stay.
                                             Activities we offer  are Swing Crossing, free Fall water zipline, burma bridge crossing, Water slides, Coracle ride, Lake Kayaking, Free roll fall, Valley
                                              crossing, Swimming, Jungle Trekking,  Camp fire, In House Activities and river activities. We option for booking best Adventure Dandeli Resorts nested in wildlife 
                                              famous for Jungle and river adventure, River Rafting, Jungle Safari.
                                        </p>

                                        <p>
                                            Trek in Dandeli avails experiencing magical wonderland of Dandeli.
                                             Enjoy new-skill sports River Activities & Jungle adventures.
                                              Dandeli resorts booking lays you to to Live with the luxury of Mother Nature to experience harmony 
                                              in Eco-friendly cottages at Adventure Dandeli resorts.
                                        </p>
                                        
                                    </div>

                                    <h2>Activities</h2>

                                    <p>
                                        Trek in Dandeli resort offers you many adventure activities and river adventure sports. River rafting and rapid surfing are adventure recreational activity which are included in our adventure package.                                     
                                    </p>
                                    <!-- === Our team === -->

                                    <div class="team">

                                        <div class="row">

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">oracleride</h4>
                                                         <!--   <h6 class="title">Director</h6>-->
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="assets/images/coracleride.jpg" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">jacuzzi</h4>
                                                          <!---  <h6 class="title">Architect</h6>-->
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="assets/images/jacuzzi.jpg" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Backwater</h4>
                                                           <!--- <h6 class="title">Quality director</h6>-->
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="assets/images/Backwater.jpg" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Kayaking</h4>
                                                           <!---- <h6 class="title">Supervisor</h6>-->
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="assets/images/kayaking.jpg" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                       
                                                    </div>
                                                </article>
                                            </div>

                                        </div> <!--/row-->

                                    </div> <!--/team-->
                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>


                        <!--=== item block === -->

                        

                        <!-- === text-card === -->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-lg-offset-2">
                                    <h2>24/7 Customer Support</h2>
                                    <p style="font-weight: 200; font-size: 20px; text-align: center; margin-top: 60px;">24/7 Customer support throughout your holiday.</p>
                                    <h2>Best Price Guarantee</h2>
                                    <p style="font-weight: 200; font-size: 20px; text-align: center; margin-top: 60px;">
                                       Packages are Designed to be Pocket Friendly to the Bachelors to the falimy crowd.
                                    </p>

                                    <div class="cards cards-block">

                                        <div class="row">

                                            <!-- === item === -->

                                            <div class="col-xs-12 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url(assets/images/SupaDam.jpg)">
                                                        <img src="assets/images/activity-1.jpg" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean" onclick="">Supa dam</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url(assets/images/ss2.jpg)">
                                                        <img src="assets/images/activity-2.jpg" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Nightlife</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-12">
                                                <figure>
                                                    <figcaption style="background-image:url(assets/images/Syntheri\ Rocks.jpg)">
                                                        <img src="assets/images/activity-3.jpg" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Syntheri Rocks</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url(assets/images/pakshi.jpg)">
                                                        <img src="assets/images/activity-4.jpg" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Nature View</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url(assets/images/bridg.jpg)">
                                                        <img src="assets/images/activity-5.jpg" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Bridge</a>
                                                </figure>
                                            </div>

                                        </div> <!--/row-->

                                    </div> <!--/cards-->

                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>

                    </div> <!--/container-->

                </div>
            </div>
        </section>

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

        <!-- ========================  Subscribe ======================== -->

        <section class="subscribe">
            <div class="container">
               
            </div>
        </section> 

        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

                <!--footer links-->
                <div class="footer-links">
                    <div class="row">
                        
                    </div>
                </div>

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
</body>

</html>