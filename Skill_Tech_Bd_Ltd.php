<?php
require './classes/application.php';
$obj_app = new Application();
$message = '';
$complete_project_result = $obj_app->select_all_complete_published_project_skill_info();
$ongoing_project_result = $obj_app->select_all_ongoing_published_project_skill_info();
$upcoming_project_result = $obj_app->select_all_upcoming_published_project_skill_info();
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

        <div class="back_color sis_pad"><br><br>



            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        <div class="text-center">
                            <h1>Skill Tech Bd Ltd</h1>
                        </div>

                        <br><br>

                        <!-- ----------- nav-pills start ----------- -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#a" data-toggle="pill"><strong>COMPLETE</strong></a></li>
                                        <li><a href="#b" data-toggle="pill"><strong>ON-GOING</strong></a></li>
                                        <li><a href="#c" data-toggle="pill"><strong>UP-COMING</strong></a></li>
                                    </ul>

                                    <div class="tab-content">

                                        <div id="a" class="tab-pane fade in active">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jumbotron">
                                                            <?php
                                                            while ($published_complete_project = mysqli_fetch_assoc($complete_project_result)) {
                                                                extract($published_complete_project);
                                                                ?>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-thumbnail mar_bot">

                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" >
                                                                        <div class="img-responsive img-thumbnail select"><a href="project_details_skill.php?id=<?php echo $project_id; ?>"><img src="assets/<?php echo $image_one; ?>" alt="" class="img-responsive" style="width: 300px; height: 300px;"></a></div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                                        <h5 class="text-center"><?php echo $project_name; ?><br/></h5><hr>    
                                                                        <table width="0%" border="0" class="bot">
                                                                            <tr >
                                                                                <td><strong>Location</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_location; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Work Description</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_description; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Contact person</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $contact_person; ?></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td><strong>Video</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> 
                                                                                    <a href="<?php echo $video_link; ?>" target="blank"><i class="video fa fa-youtube-square " aria-hidden="true" title="Video link"></i></a>
                                                                                </td>
                                                                            </tr>                      


                                                                        </table>           
                                                                    </div>


                                                                </div>
                                                            <?php } ?>


                                                            <span>Pages 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="b" class="tab-pane fade">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jumbotron">
                                                            <?php
                                                            while ($published_ongoing_project = mysqli_fetch_assoc($ongoing_project_result)) {
                                                                extract($published_ongoing_project);
                                                                ?>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-thumbnail mar_bot">

                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" >
                                                                        <div class="img-responsive img-thumbnail select"><a href="project_details_skill.php?id=<?php echo $project_id; ?>"><img src="assets/<?php echo $image_one; ?>" alt="" class="img-responsive" style="width: 300px; height: 300px;"></a></div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                                        <h5 class="text-center"><?php echo $project_name; ?><br/></h5><hr>  
                                                                        <table width="0%" border="0" class="bot">
                                                                            <tr >
                                                                                <td><strong>Location</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_location; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Work Description</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_description; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Contact person</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $contact_person; ?></td>
                                                                            </tr>
                                                                            
                                                                    <tr>
                                                                        <td><strong>Video</strong></td>
                                                                        <td>&nbsp;<strong>:</strong> 
                                                                            <a href="<?php echo $video_link; ?>" target="blank"><i class="video fa fa-youtube-square " aria-hidden="true" title="Video link"></i></a>
                                                                        </td>
                                                                    </tr>                      
                                                                            
                                                                            
                                                                        </table>           
                                                                    </div>
                                                                </div>
                                                            <?php } ?>

                                                            <span>Pages 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="c" class="tab-pane fade">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jumbotron">
                                                            <?php
                                                            while ($published_upcoming_project = mysqli_fetch_assoc($upcoming_project_result)) {
                                                                extract($published_upcoming_project);
                                                                ?>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-thumbnail mar_bot">

                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" >
                                                                        <div class="img-responsive img-thumbnail select"><a href="project_details_skill.php?id=<?php echo $project_id; ?>"><img src="assets/<?php echo $image_one; ?>" alt="" class="img-responsive" style="width: 300px; height: 300px;"></a></div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                                        <h5 class="text-center"><?php echo $project_name; ?><br/></h5><hr>  
                                                                        <table width="0%" border="0" class="bot">
                                                                            <tr >
                                                                                <td><strong>Location</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_location; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Work Description</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $project_description; ?> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Contact person</strong></td>
                                                                                <td>&nbsp;<strong>:</strong> <?php echo $contact_person; ?></td>
                                                                            </tr>

                                                                      <tr>
                                                                          <td><strong>Video</strong></td>
                                                                          <td>&nbsp;<strong>:</strong> 
                                                                              <a href="<?php echo $video_link; ?>" target="blank"><i class="video fa fa-youtube-square " aria-hidden="true" title="Video link"></i></a>
                                                                          </td>
                                                                      </tr>                      
                                                                            
                                                                        </table>           
                                                                    </div>
                                                                </div>
                                                            <?php } ?>

                                                            <span>Pages 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ----------- nav-pills end ----------- -->


                    </div>
                </div>   
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