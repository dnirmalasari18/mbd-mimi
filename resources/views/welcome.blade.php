
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pray.in - Katholik</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/animations.css" type="text/css">
	<link href="/css/material-kitpro.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap3.css">
	<link rel="stylesheet" href="css/salvattore.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<nav class="navbar navbar-rose">
	                  <div class="container">
	                    <!-- Brand and toggle get grouped for better mobile display -->
	                    <div class="navbar-header">
	                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                      </button>
	                      <a class="navbar-brand" href="#pablo">MiMi's</a>
	                    </div>

	                    <!-- Collect the nav links, forms, and other content for toggling -->
	                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                      <ul class="nav navbar-nav">
	                        <li class="active">
	    						<a href="#pablo">Home</a>
	    					</li>
	                        <li>
	    						<a href="#pablo">Member</a>
	    					</li>
							 <li class="active">
	    						<a href="#pablo">Barang</a>
	    					</li>
	                        <li>
	    						<a href="#pablo">Transaksi</a>
	    					</li>
	                      </ul>
	                      <form class="navbar-form navbar-right" role="search">
	                        <div class="form-group form-white">
	                          <input type="text" class="form-control" placeholder="Search">
	                        </div>
	                        <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i>S</i></button>
	                      </form>

	                    </div><!-- /.navbar-collapse -->
	                  </div><!-- /.container-fluid -->
	                </nav>
	    <!--        end rose navbar -->

	  
		<div id="fh5co-container">
			<div id="fh5co-home" class="js-fullheight" data-section="home">
				<div class="flexslider">

					<div class="fh5co-overlay"></div>
					<div class="fh5co-text">
						<div class="container animatedParent">
							<div class="row">
								<h1>MiMi's</h1>
								<h2>Hijab Fashion Masa Kini</h2>
							</div>
						</div>
					</div>
					<ul class="slides">
					<li style="background-image: url('{{asset('img/hijab1.jpg')}}');" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url('{{asset('img/hijab2.jpg')}}');" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url('{{asset('img/hijab3.jpg')}}');" data-stellar-background-ratio="0.5"></li>
					</ul>

				</div>
			</div>
		</div>
		
		
		
	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2018 Heaven Finders. <br> Designed by Cornelia Natasha & Dewi Ayu Nirmalasari<br> Manajemen Basis Data D <br> MiMi's </p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center footer">
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-line"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<script src="js/css3-animate-it.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<script>
		$('.nav__toggle-btn').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu button");
    $("#mainListDiv").toggleClass("nav__wrapper--visible");
    $("#mainListDiv").fadeIn();
	});
		
	$(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
					$('.warna').hover(function(){
					$(this).css("color","gold");
					},function(){
						$(this).css("color","#000");
					}
				);
				$('.warna').css("color","#000");
                $('.nav').addClass('highlight');
                console.log("OK");
            } else {
				$('.warna').hover(function(){
					$(this).css("color","#gold");
					},function(){
						$(this).css("color","#fff");
					}
				);
				$('.warna').css("color","#fff")
                $('.nav').removeClass('highlight');
            }
        });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

