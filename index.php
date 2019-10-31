<?php
session_start();          //creates a session or resumes the current one based on a session identifier passed via a GET or POST request
?>


<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8">
	<title>Aishu Clothing Co.</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
body{
	background-color: rgb(46,46,46);
}
	</style>
</head>


<body>
	<div class="navbar navbar-inverted" style="background-color: black;">				<!-- bootstrap navigation bar classes -->
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" style="color:Red;">Aishu Clothing Co.&nbsp;&nbsp;&nbsp;&nbsp;Est. 2019</a>
			</div>

 

			<div class="collapse navbar-collapse" id="collapse">
				<form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search" id="search" style = "background-color: rgb(46,46,46);">
			        </div>
			        <button type="submit" class="btn btn-primary" id="search_btn" style="background-color: red"><span class="glyphicon glyphicon-search"></span></button>
			     </form>
				<ul class="nav navbar-nav navbar-right" >
					<ul class="nav navbar-nav">
						<li><a href="index.php" style="color:Red;"><span class="glyphicon glyphicon-home"></span>Home</a></li>
						<li><a href="index.php" style="color:Red;"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
					</ul>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:Red;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sl.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price in $.</div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
									<!--<div class="row">
										<div class="col-md-3">Sl.No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price in $.</div>
									</div>-->
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>

					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:Red;"><span class="glyphicon glyphicon-user"></span>SignIn</a>
						<ul class="dropdown-menu">
							<div style="width:300px;">
								<div class="panel panel-primary">
									<div class="panel-heading">Login</div>
									<div class="panel-heading">
										<form onsubmit="return false" id="login">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email" id="email" required/>
											<label for="email">Password</label>
											<input type="password" class="form-control" name="password" id="password" required/>
											<p><br/></p>
											<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
										</form>
									</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><h4>Categories</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div> -->
			<div id="get_brand">
			</div>
			<!--<div class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><h4>Brand</h4></a></li>
			<li><a href="#">Categories</a></li>
			<li><a href="#">Categories</a></li>
			<li><a href="#">Categories</a></li>
			<li><a href="#">Categories</a></li>
		</div> -->
	</div>
	<div class="col-md-8 col-xs-12">
		<div class="row">
			<div class="col-md-12 col-xs-12" id="product_msg" style="background-color: rgb(46,46,46);">
			</div>
		</div>
		<div class="panel panel-info" >
			<div class="panel-heading" style="background-color: rgb(30,30,30);">Products</div>
			<div class="panel-body" style="background-color: rgb(46,46,46);">
				<div id="get_product" style="background-color: rgb(46,46,46);">
					<!--Here we get product jquery Ajax Request-->
				</div>
				<!--<div class="col-md-4">
				<div class="panel panel-info">
				<div class="panel-heading">Samsung Galaxy</div>
				<div class="panel-body">
				<img src="product_images/images.JPG"/>
			</div>
			<div class="panel-heading">$.500.00
			<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
		</div>
	</div>
</div> -->
</div>
<div class="panel-footer" style="background-color: rgb(46,46,46); color: white;" >&copy; 2019 &nbsp; Aishu Clothing Co.&trade; <span style="float:right">All Rights Reserved&reg<span> </div>
</div>
</div>
<div class="col-md-1"></div>
</div>
</div>
</body>
</html>
