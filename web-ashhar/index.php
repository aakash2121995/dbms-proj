<?php
echo "PHP Working";
/**
 * Created by PhpStorm.
 * User: Ashhar Hasan
 * Date: 10/7/2015
 * Time: 1:59 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>JMI Fashion</title>
	<link href="Content/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<script src="Scripts/jquery-1.9.1.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>
	<div class="row">
		<div class="col-lg-push-2" col-lg-8 col-md-10 col-md-push-1 col-sm-12">
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
						<a class="navbar-brand" href="#">Brand</a>
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
							<li><a href="#">Log In</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-shopping-cart">  Cart</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
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
		</div>
	</div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--Set base path for the application-->
    <base href="/" />
    <meta charset="utf-8" />

    <!--Set display width to device width-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--Link Bootstrap and jquery-->
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

    <title>JMI Fashion</title>

    <!--Placeholder for head tag-->
</head>
<body>
        <!--Fixed navbar at the top which is responsive-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header navbar-brand">
                    JMI Fashion
                </div>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li id="HomeLink" runat="server"><a href="/index.php">Home</a></li>
                        <li id="AboutLink" runat="server"><a href="/about.php">About</a></li>
                        <li id="ContactLink" runat="server"><a href="/contact.php">Contact</a></li>
                    </ul>
                    <section id="login">
                        <!--Use LoginView to show different things to logged in and other users-->
                        <asp:LoginView runat="server" ViewStateMode="Disabled" ID="LoginView">
                            <AnonymousTemplate>
                                <ul class="nav navbar-nav navbar-right">
                                    <li id="RegisterLink" runat="server"><a href="Register.aspx"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                                    <li id="LoginLink" runat="server"><a href="Login.aspx"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                </ul>
                            </AnonymousTemplate>
                            <LoggedInTemplate>
                                <ul class="nav navbar-nav navbar-right">
                                    <li id="ManageLink" runat="server"><a href="/Accounts/Manage.aspx"><span class="glyphicon glyphicon-user"></span> Manage Account</a></li>
                                    <li>
                                        <asp:LoginStatus runat="server" LogoutAction="RedirectToLoginPage" LogoutText="Log off" LogoutPageUrl="~/Login.aspx" />
                                    </li>
                                </ul>
                            </LoggedInTemplate>
                        </asp:LoginView>
                    </section>
                </div>
            </div>
        </nav>
</form>
</body>
</html>

