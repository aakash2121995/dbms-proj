
<!DOCTYPE html>

<?php 
    require "session.php";

    if($_SESSION['loggedin'] == 1)
        echo '<script src="Scripts/loggedIn.js"></script>' ;

    else if($_SESSION['incorrect'] == 1)
    {   $_SESSION['incorrect'] = 0;
        echo '<script src="Scripts/notLoggedIn.js"></script>' ;
    }
    else if($_SESSION['incorrect'] == 0)
        echo '<script src="Scripts/notIncorrect.js"></script>' ;

?>
<script type="text/javascript">
function doSomething() {
    $.get("logout.php")
    window.location = 'index.php'
    return false
}
</script>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Online Shopping Site for EveryOne</title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/carousel.css" rel="stylesheet" />
    <link href="Content/login.css" rel="stylesheet" />
</head>
<body>
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/carousel.js"></script>
    <div class=" row col-lg-push-2 col-lg-8 col-md-10 col-md-push-1 col-sm-12">
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

       
                <li><a  id ="SignIn"  href="#"  role="button" data-toggle="modal" data-target="#login-modal">Sign In</a>


        <!-- END # BOOTSNIP INFO -->

        <!-- BEGIN # MODAL LOGIN -->
              <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </div>
                
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                
                            <!-- Begin # Login Form -->
                            <form id="login-form" action="login.php" method = "POST">
                                <div class="modal-body">
                                    <div id="div-login-msg">
                                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-login-msg">Type your username and password.</span>
                                    </div>
                                    <input id="login_username" name="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                                    <input id="login_password" name = "login_password" class="form-control" type="password" placeholder="Password" required>
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
                        <li><a  href="cart.php"><span class="glyphicon glyphicon-shopping-cart" >  Cart</span></a></li>
                        <li id = "Account" class="dropdown"><a  href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a><ul  class="dropdown-menu "><li><a href="#">My Orders</a></li><li><a href="#">My Wishlist</a></li><li class="divider"></li><li> <a href="#" onclick="doSomething()">Log Out</a></li></ul></li>
                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
