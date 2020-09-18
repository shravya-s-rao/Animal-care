<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>About Organisation</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> ARSO2109@gmail.com</a>
						</div>
						<div class="phone-box">
							<a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +99880046372</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
							<ul>
							<li><a href="http://13.233.56.180/project/Login%20page/Login_v17/login.php">Sign Out</a></li>
							<ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/index.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/index.php">Home</a></li> 
                        <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/Complainant_form/colorlib-regform-36/index.php">Register Complaint</a></li>
                        <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/Donation form/colorlib-regform-12/index.php">Make Donation</a></li>
                        <li><a class="active" href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/aboutorg.php">About Organisations</a></li>
                        <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/gallery.php">Gallery</a></li>
                        <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/Feedback form/ContactFrom_v4/index.php">Feedback</a></li>
                        <li><a href="http://13.233.56.180/project/Login%20page/Login_v17/HomePage/goodweb/aboutus.php">About us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>About Organisations</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="http://13.233.56.180/projects/Login%20page/Login_v17/HomePage/goodweb/aboutorg.php">About Organisations</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="test-box" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>About Organisations</h3>
                <p class="lead">Who has joined us?</p>
                <table class="table table-striped text-center">
                    <tr>
                        <th><center>ID</center></th>
                        <th><center>Founder</center></th>
                        <th><center>Organisation Name</center></th>
                        <th><center>Type</center></th>
                        <th><center>Location</center></th>
                    </tr>
                <?php
                $con=mysqli_connect("localhost","root","root123","animalrescue");
                if ($con-> connect_error){
                    die("Connection failed:". $con-> connect_error);
                }
                $sql="SELECT id, ofname, oname, gender, username from organisation";
                $result= $con-> query($sql);

                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["id"] . "</td><td>". $row["ofname"] . "</td><td>". $row["oname"] . "</td><td>". $row["gender"] . "</td><td>". $row["username"] ."</td></tr>";
                    }
                    echo "</table>";
                }
                else {
                    echo "No organisations are registered yet";
                }
                $con-> close();
                ?>
            </table>

               <!--  <li>"Vatsalya " Animal Care Trust, Shaktinagar,Mangalore</li>
                <li>Pets paradise,mangaljyothi, Vamanjoor,Mangalore</li>
                <li>Charlie's Animal Rescue Centre,Near Reva College, Yelahanka, Bengaluru</li>
                <li>Karuna Animal Shelter,Near-BBMP Help Center, Hebbal, Bengaluru</li>
                <li>Maruthy Dog Shelter,Kodathi Village, Sarjapur Main Road, Bengaluru</li>
                <li>Krupa Loving Animal,Kengeri Satellite Town, Bengaluru</li> -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">Having support of various organisations that come together to work for a brighter future to these homeless animals feels absolutely priceless.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/shravya.png" alt="" class="img-responsive alignleft">
                                <h4>Shravya S Rao<small>- Founder of ARSO</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    <div class="testimonial clearfix">
                        <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">Working as the voice of these animals gives me immense satisfaction as a human.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/varsha.png" alt="" class="img-responsive alignleft">
                                <h4>Varsha Narayan<small>- Co-Founder of ARSO</small></h4>
                            </div>
                        </div>


            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>