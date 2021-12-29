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
    <title>Contact-Trek in Dandeli</title>

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
                    </div> <!--/navigation-block-->

                </nav>
            </div> <!--/container-->

        </header>

        <!-- ======================== Contact ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url(assets/images/header-1.jpg)">
                <div class="container">
                    <h2 class="title">Contact</h2>
                    <p>The place, our services & our team</p>
                </div>
            </div>

            <!-- ===  Contact === -->

            <div class="contact">

                <div class="container">

                    <!-- === Google map === -->

                    <div class="map" id="map"></div>

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                            <!-- === Contact block === -->

                            <div class="contact-block">

                                <!-- === Contact banner === -->

                                <div class="banner">
                                    <div class="row">
                                        <div class="col-md-offset-1 col-md-10 text-center">
                                            <h2 class="title">Send an email</h2>
                                            <p>
                                                Please use this form if you have any questions about our products <br /> and we'll get back with you very soon.
                                            </p>


                                        </div>
                                    </div>
                                </div>

                                <!-- === Contact info === -->

                                <div class="contact-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <a href="map.php"><span class="icon icon-map-marker"></span></a>
                                                <figcaption>
                                                    <strong>Where are we?</strong>
                                                    <span>Ganesh gudi,Dandeli <br />karnataka</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-phone"></span>
                                                <figcaption>
                                                    <strong>Call us</strong>
                                                    <span>
                                                        <strong></strong> +91 7349750760 
                                                        <strong></strong> +91 9901273171<br />
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-clock"></span>
                                                <figcaption>
                                                    <strong>Working hours</strong>
                                                    <span>
                                                        <strong>Mon-sun</strong> - 24 hours <br />
                                                        
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/contact-block-->
                        </div><!--col-sm-8-->
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/contact-->
        </section>

        <!-- ========================  Subscribe ======================== -->

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

    
</body>

</html>