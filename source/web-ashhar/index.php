<?php
  require_once "config/connect.php";
  require_once "config/session.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/carousel.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
</head>
<body>
    <script src="assets/js/jquery/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/carousel.js"></script>
    <div class="row col-lg-push-2 col-lg-12 col-md-12 col-md-push-1 col-sm-12">
        <!-- Navigation Bar Started -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Mokart</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li>
                            <form class="navbar-form navbar-left input-group-lg" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control form-group-lg" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                        </li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                            <!-- BEGIN # BOOTSNIP INFO -->

       
                <li><a href="#"  role="button" data-toggle="modal" data-target="#login-modal">Sign In</a>

        <!-- END # BOOTSNIP INFO -->

        <!-- BEGIN # MODAL LOGIN -->
              <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <img class="img-circle" id="img_logo" src="/favicon.png">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </div>
                
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                
                            <!-- Begin # Login Form -->
                            <form id="login-form">
                                <div class="modal-body">
                                    <div id="div-login-msg">
                                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-login-msg">Type your username and password.</span>
                                    </div>
                                    <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                                    <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                    </div>
                                    <div>
                                        <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                        <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End # Login Form -->
                    
                            <!-- Begin | Lost Password Form -->
                            <form id="lost-form" style="display:none;">
                                <div class="modal-body">
                                    <div id="div-lost-msg">
                                        <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-lost-msg">Type your e-mail.</span>
                                    </div>
                                    <input id="lost_email" class="form-control" type="text" placeholder="E-Mail " required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                                    </div>
                                    <div>
                                        <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                        <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Lost Password Form -->
                    
                            <!-- Begin | Register Form -->
                            <form id="register-form" style="display:none;">
                                <div class="modal-body">
                                    <div id="div-register-msg">
                                        <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-register-msg">Register an account.</span>
                                    </div>
                                    <input id="register_username" class="form-control" type="text" placeholder="Username " required>
                                    <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                                    <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                    <div>
                                        <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                        <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Register Form -->
                    
                        </div>
                        <!-- End # DIV Form -->
                
                    </div>
        
            <!-- END # MODAL LOGIN -->
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart">  Cart</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">My Wishlist</a></li>
                               
                                <li class="divider"></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- Navigation Bar Ender -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Shop By Cateogry</div>
                    <div class="panel-body">
                        <div class="panel-group" id="collapse">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#collapse" href="#collapse-one">
                                            <span class="glyphicon glyphicon-triangle-bottom"> Men </span>
                                        </a>

                                    </h4>
                                </div>
                                <div id="collapse-one" class="panel-collapse collapse in ">
                                    <div class="panel-body ">
                                        <a class="panel-collapse " href="#">T-Shirts</a><br />
                                        <a class="panel-collapse" href="#">Jeans</a><br />
                                        <a class="panel-collapse" href="#">FootWear</a><br />
                                        <a class="panel-collapse" href="#">Braclettes</a><br />
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#collapse" href="#collapse-two">
                                            <span class="glyphicon glyphicon-triangle-bottom"> Women </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a class="panel-collapse " href="#">T-Shirts</a><br />
                                        <a class="panel-collapse" href="#">Jeans</a><br />
                                        <a class="panel-collapse" href="#">FootWear</a><br />
                                        <a class="panel-collapse" href="#">Braclettes</a><br />
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#collapse" href="#collapse-three">
                                            <span class="glyphicon glyphicon-triangle-bottom"> Kids </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <a class="panel-collapse " href="#">T-Shirts</a><br />
                                        <a class="panel-collapse" href="#">Jeans</a><br />
                                        <a class="panel-collapse" href="#">FootWear</a><br />
                                        <a class="panel-collapse" href="#">Braclettes</a><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">
                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">

                            <img alt="First slide" src="Img/main-slider1.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="First slide" src="Img/main-slider2.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 2</h3>
                                <p>Morbi eget libero quis metus consectetur semper.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="First slide" src="Img/main-slider3.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 3</h3>
                                <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#my-carousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12">
                <h1>Trending Now</h1>

                <div class="well">
                    <div id="myCarousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x">
                                            <img src="Img/product1.jpg" alt="Image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product3_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product1_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>

        <div>
            <div class="col-xs-12">
                <h1>Men Apparels</h1>

                <div class="well">
                    <div id="myCarousel2" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x">
                                            <img src="Img/product1.jpg" alt="Image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product3_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product1_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel2" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>
    </div>

<?php if ($_SESSION['loggedin'] != 1 ) { ?>
  <div class="row col-sm-offset-1" style="margin-top: 100px;" >
    <form id="submitForm" method="POST" action="/include/login.php">
      <div align="center" class="col-sm-3">
        <label style="margin-top: 21px; margin-right: -30px;">Let's Login Hackerboy!</label>
      </div>
      <div class="col-sm-3">
        <input style="margin-top: 15px;" name="user" type="text" placeholder="Your Username" class="form-control"  required autofocus>
      </div>
      <div class="col-sm-3">
        <input style="margin-top: 15px;" name="pass" type="password" placeholder="Your Password" class="form-control" required>
      </div>
      <div class="col-sm-1">
        <button id="signinBtn"type="submit" style="margin-top: 15px;" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div>
<?php } ?>
<?php if ($_SESSION['loggedin'] == 1) { ?>
<h1>
    <?php
        echo $_SESSION['user'];
        echo $_SESSION['name'];
    ?>
</h1>
<?php } ?>

</body>
</html>
