
 <?php 

$conn = mysqli_connect('localhost','root','','tasaki');
mysqli_set_charset($conn,"utf-8");
// var_dump($conn);

 ?>

<!DOCTYPE html>
<html lang="en"><head>
	<title> Tasaki  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="1.css">
 </head>
<body >	
	
 	<div class="topheader">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-6 wow jello">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-google-plus"></i></a>
 					 </div>
 					<div class="datban">
 						Gọi để đặt bàn: +84 29 345 678
 					 </div>
 				</div>
 				<div class="col-sm-6 ">
 					<div class="datban openingtop float-sm-right text-sm-left text-xs-center">
 						Mở cửa : 9:00am - 10:00pm
 					</div>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->
 	<div class="logovamenu">
	    <nav class="navbar navbar-light  fontroboto">
	    	<div class="container">    	
			      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">
			       
			      </button>
			      <div class="collapse navbar-toggleable-xs" id="mtren">
			        <a class="navbar-brand text-xs-center text-sm-left" href="index.php"><img src="images/banner/logo1.png" alt=""></a>

			        <ul class="nav navbar-nav float-sm-right">
			          <li class="nav-item active">
			            <a class="nav-link" href="index.php">Trang chủ</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="about.php">Giới thiệu</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="news.php">Tin Tức</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="thucdon.php">Thực Đơn</a>
			          </li>
			          
			         <li class="nav-item datbanmenu">
			            <a class="nav-link btn btn-warning wow bounce" data-wow-iteration="3" href="contact.php" >Đặt bàn</a>
			          </li>
			        </ul>
			      </div>
	      </div> <!-- het container -->
	    </nav>
 	</div> <!-- het logo va menu -->