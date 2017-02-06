<?php
require './classes/application.php';
$obj_app = new Application();

$message = '';
if (isset($_POST['btn'])) {
    $message = $obj_app->save_contact_info($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>KOZ AUTOMATION (BD) LTD.</title>

        <link rel="shortcut icon" href="images/C_logo.png"> 
        <link href="CSS/google_fonts.css" rel="stylesheet" type="text/css">
        <link href="CSS/google_fonts2.css" rel="stylesheet" type="text/css">

        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
        <link href="CSS/custom.css" rel="stylesheet" type="text/css">
    </head>

    <body class="no-trans"> 

        <!-- header start -->
        <!-- ================ --> 
        <header class="header fixed clearfix navbar navbar-fixed-top ">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <!-- header-left start -->
                        <div class="header-left clearfix">
                            <!-- logo -->
                            <div class="logo smooth-scroll">
                                <a href="index.php"><img class="img-responsive" id="logo" src="images/C_logo.png" alt="Worthy"></a>
                            </div>
                            <!-- name-and-slogan -->
                            <div class="site-name-and-slogan smooth-scroll">
                                <div class="site-name">KOZ</div>
                                <div class="site-slogan">AUTOMATION (BD) LTD.</div>
                            </div>
                        </div>
                        <!-- header-left end -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">
                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">
                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="index.php">HOME</a></li>
                                                <li><a href="project.php">PROJECT</a></li>
                                                <li><a href="sister.php">SISTER CONCERN</a></li>
                                                <li><a href="products.php">PRODUCTS</a></li>
                                                <li><a href="service.php">SERVICE</a></li>
                                                <li><a href="trainig.php">TRAINING</a></li>
                                                <li><a href="about.php">ABOUT</a></li>
                                                <li class="active"><a href="contact.php"><strong>CONTACT</strong></a></li> 
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!-- navbar end -->
                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-right end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- --------------------------------------------------------------- -->



        <div class="back_color menu_pad">
            <br><br><br><br><br>
            <div class="panel-heading page-header text-center lead">
                <p><u><?php echo $message; ?></u></p>
            </div>
            <br><br>

            <div class="container ">
                <div class="row ">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2>SAVAR</h2><hr>
                        <p>Jatiyo Andha sogtha  Market,<br>
                            Shop: 102, 1st Floor,Savar,Dhaka-1340<br>
                            Handy : 01716037326, 01711261561<br>
                            E-mail : kozabl16@gmail.com</p><br>
                    </div>    

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2>Dhaka</h2><hr>
                        <p>House -9/4(3rd floor)<br>
                            Avenue-05, Block-B, <br>
                            Section-06, Mirpur, Dhaka-1216<br>
                            Handy: 01716037326, 01818395426</p><br>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2>CHITTAGONG</h2><hr>
                        <p>MAK Bhaban,1338,CDA Avenue (3rd floor)<br>
                            Beside Sanmar Ocean City, East Nasirabad,Chittagong.<br>
                            Handy : 01716037326, 01829369968, 01814953831<br>
                            E-mail : kozabl16@gmail.com</p><br>
                    </div>    

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2>MANIKGONJ</h2><hr>
                        <p>Power Angels Bhaban,3rd Floor,<br>
                            Manikgonj Bustand, Manikgonj<br>
                            Handy : 01716037326, 01728786917<br>
                            E-mail : kozabl16@gmail.com</p><br>
                    </div>          

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2>Gazipur</h2><hr>
                        <p>Super shine Skill  Development Center<br>
                            DUET, Gazipur<br>
                            Handy : 01716037326,01911433348<br>
                            E-mail : kozabl16@gmail.com</p><br>
                    </div>     



                </div>
            </div><br><br>
        </div>


        <!-- footer start -->
        <footer id="footer">

            <div class="footer section">
                <div class="container">
                    <h1 class="title text-center" id="contact">Contact Us</h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <p class="large">

                                </p>
                                <ul class="list-icons">
                                    <li><i class="fa fa-envelope-o pr-10"></i> kozabl16@gmail.com</li>
                                </ul>
                                <ul class="social-links">
                                    <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <form action="" method="post" >
                                    <div class="form-group has-feedback">
                                        <label class="sr-only">Name</label>
                                        <input type="text" class="form-control" id="name2" placeholder="Name" name="contact_name" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only">Email address</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter email" name="contact_email" required>
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only">Message</label>
                                        <textarea class="form-control" rows="8" placeholder="Message" name="contact_message" required></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" name="btn" value="Send" class="btn btn-default">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p class="text-center"><strong>Copyright © 2016. KOZ AUTOMATION BD. LTD.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Modernizr javascript -->
        <script type="text/javascript" src="js/modernizr.js"></script>
        <!-- Isotope javascript -->
        <!-- Backstretch javascript -->
        <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
        <!-- Appear javascript -->
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>
        <!-- Custom Scripts -->
        <!-- Html Coder Add -->
    </body>
</html>
