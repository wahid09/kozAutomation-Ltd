<?php
require './classes/application.php';
$obj_app = new Application();
$message = '';
$project_id = $_GET['id'];
$project_result_by_id = $obj_app->select_published_project_smart_details_by_id($project_id);
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
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
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
                                                <li class="active"><a href="sister.php"><strong>SISTER CONCERN</strong></a></li>
                                                <li><a href="products.php">PRODUCTS</a></li>
                                                <li><a href="service.php">SERVICE</a></li>
                                                <li><a href="trainig.php">TRAINING</a></li>
                                                <li><a href="about.php">ABOUT</a></li>
                                                <li><a href="contact.php">CONTACT</a></li> 
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

        <!-- --------------------------------------------------------------- -->


        <div class="back_color menu_pad"><br><br><br><br><br><br><br><br><br>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php
                        while ($published_project_details = mysqli_fetch_assoc($project_result_by_id)) {
                            extract($published_project_details);
                            ?>
                            <div class="col-lg-6 col-md-6  col-sm-9 col-xs-10 text-center" >
                                <div id="m_carousel" class="carousel slide " data-ride="carousel" data-interval="2200">
                                    <ol class="carousel-indicators">
                                        <li data-target="#m_carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#m_carousel" data-slide-to="1"></li>
                                        <li data-target="#m_carousel" data-slide-to="2"></li>
                                        <li data-target="#m_carousel" data-slide-to="3"></li>
                                        <li data-target="#m_carousel" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="img-responsive"><img src="assets/<?php echo $image_one; ?>" alt="" style="width: 540px; height: 350px;"></div>
                                        </div>
                                        <div class="item">
                                            <div class="img-responsive"><img src="assets/<?php echo $image_two; ?>" alt="" style="width: 540px; height: 350px;"></div>
                                        </div>
                                        <div class="item">
                                            <div class="img-responsive"><img src="assets/<?php echo $image_three; ?>" alt="" style="width: 540px; height: 350px;"></div>
                                        </div>
                                        <div class="item">
                                            <div class="img-responsive"><img src="assets/<?php echo $image_four; ?>" alt="" style="width: 540px; height: 350px;"></div>
                                        </div>
                                        <div class="item">
                                            <div class="img-responsive"><img src="assets/<?php echo $image_five; ?>" alt="" style="width: 540px; height: 350px;"></div>
                                        </div>
                                    </div>
                                    <a href="#m_carousel" class="left carousel-control" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a href="#m_carousel" class="right carousel-control" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <h5><?php echo $project_name; ?><br/></strong></h5><hr>    
                                <table width="0%" border="0" class="bot">
                                    <tr>
                                        <td><strong>Location</strong></td>
                                        <td>&nbsp;<strong>:</strong><?php echo $project_location; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Work Description</strong></td>
                                        <td>&nbsp;<strong>:</strong> <?php echo $project_description; ?> </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Contact person</strong></td>
                                        <td>&nbsp;<strong>:</strong><?php echo $contact_person; ?></td>
                                    </tr>
                                    
                        <tr>
                            <td><strong>Video</strong></td>
                            <td>&nbsp;<strong>:</strong> 
                            	<a href="<?php echo $video_link; ?>" target="blank"><i class="video fa fa-youtube-square " aria-hidden="true" title="Video link"></i></a>
                            </td>
                        </tr>                      
                                    
                                    
                                    
                                </table> 

                            </div>

                        <?php } ?>

                    </div>     


                </div>
                <br><br><br>
                <a href="SMART_IT_ZONE.php"><button type="button" class="btn btn-danger">Back</button></a>
                <br><br><br>
            </div>

        </div>

        <!-- footer start -->
        <footer id="footer">
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
