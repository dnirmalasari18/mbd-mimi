<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('/img/logo/logo_atas_landing_page.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="{{asset('/css/PNotifyBrightTheme.css')}}">
	<link rel="stylesheet" href="{{asset('/css/animations.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<title>Pray.in</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/material-kitpro.css')}}" rel="stylesheet"/>
	<!-- PNotify -->
		<script src="{{asset('/js/PNotify.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			window.centerModalStack = {
				'dir1': 'down',
				'firstpos1': 25,
				'modal': true,
				'overlayClose': true
			};
			PNotify.defaults.width = '400px';
		</script>
	
	<style>
		body{
			background-image: url('/img/hijab1.jpg');
			background-size: cover;
			color: #ec008c;
		}
		label{
			color: black;
			font-size: 20px;
			text-align: left;
			font-weight: 700;
			margin-top: 50px;
		}
	
	</style>
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
<div class="animatedParent">
<h1 style="text-align:center; margin-bottom:50px; font-weight:700" class="animated fadeIn">ADD BARANG</h1>
	</div>
<center><div style="width:30%; background-color:pink; border-radius:20px;">
	{!! Form::open(['action' => 'BarangController@barangStore','method'=>'POST','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
						{{csrf_field()}}
							
						<div class="col-12">
					    	{{Form::label('nama', 'Nama')}}
					    	{{Form::text('nama','', ['class'=>'form-control'])}} 
					    	@if( $errors->has('nama') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('nama') }}</strong>
					    	@endif
					    </div>

					    <br>

					    <div class="col-12">
					    	{{Form::label('merk_id', 'Merk')}}
							{{Form::select('merk_id',[''=>'','1'=>'AIRA BY ELZATTA','2'=> 'AIRA MUSLIM BUTIK','3'=>'BELLISMIA','4'=>'BELLYBEE','5'=>'BONITA','6'=>'KAMI IDEA','7'=>'KAMILAA','8'=>'KHANAAN','9'=>'LUBNA','10'=>'MADELEINE','11'=>'MALAIKA','12'=>'MECCANISM','13'=>'MINA','14'=>'NASHWA','15'=>'NRH X NABILIA','16'=>'NUBER','17'=>'PINK SUGAR','18'=>'RIA MIRADA','19'=>'SABAA','20'=>'SAN                                                                                                                                                                                                    MARCO','21'=>'SCALA','22'=>'SIMPLICITY','23'=>'SYAFINA','24'=>'VIVI ZUBEDI','25'=>'WHITEMODE','26'=>'YRUMI','27'=>'ZAHRA  SIGNATURE','28'=>'ZALIA','29'=>'ZELENA','30'=>'ZUMARA'],'', ['class'=>'form-control'])}}
							@if( $errors->has('merk_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('merk') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('warna_id', 'Warna')}}
							{{Form::select('warna_id',[''=>'','1'=>'Beige','2'=> 'Black','3'=>'Blue','4'=>'Brown','5'=>'Gold','6'=>'Green','7'=>'Grey','8'=>'Multi','9'=>'Navy','10'=>'Orange','11'=>'Pink','12'=>'Purple','13'=>'Red','14'=>'Silver','15'=>'White','16'=>'Yellow','17'=>'Maroon','18'=>'Peach','19'=>'Bone','20'=>'Nude','21'=>'Tosca','22'=>'Fuschia','23'=>'Aqua','24'=>'Aero','25'=>'Almond','26'=>'Amber','27'=>'Cream','28'=>'Dandelion','29'=>'Desire','30'=>'Yellow'],'', ['class'=>'form-control'])}}
							@if( $errors->has('warna_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('warna_id') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('ukuran_id', 'Ukuran')}}
							{{Form::select('ukuran_id',[''=>'','1'=>'XS','2'=> 'S','3'=>'M','4'=>'L','5'=>'XL','6'=>'XXL','7'=>'ALL SIZE'],'', ['class'=>'form-control'])}}
							@if( $errors->has('ukuran_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('ukuran_id') }}</strong>
					    	@endif
					    </div>
					    <br>
					    <div class="col-12">
					    	{{Form::label('kategori_barang_id', 'Kategori Barang')}}
							{{Form::select('kategori_barang_id',[''=>'','1'=>'Dress Muslim','2'=> 'Atasan Muslim','3'=>'Hijab','4'=>'Bawahan Muslim','5'=>'Outwear Muslim','6'=>'Perlengkapan Sholat'],'', ['class'=>'form-control'])}}
							@if( $errors->has('kategori_barang_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('kategori_barang_id') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">
					    	{{Form::label('harga', 'Harga')}}
							{{Form::text('harga','', ['class'=>'form-control'])}}
							@if( $errors->has('harga') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('harga') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('stok', 'Stok')}}
							{{Form::text('stok','', ['class'=>'form-control'])}}
							@if( $errors->has('stok') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('stok') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">      
	                        {{Form::label('foto', 'Image')}}
	                        {{ Form::file('foto', ['class'=>'form-control']) }}
	                        @if( $errors->has('image') ? ' has-error' : '' )
	                            <strong>{{ $errors->first('image') }}</strong>
	                        @endif
	                    </div>
					    <br>
						<div class="dorne-add-listings-btn">
							<br>
							{{Form::submit('Submit',['class'=>'btn btn-rose'])}}
						</div>
						{!! Form::close() !!}
	</div></center>
	
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="{{asset('js/moment.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

	<!-- Salvattore -->
	<script src="{{asset('js/salvattore.min.js')}}"></script>
	<script src="{{asset('js/css3-animate-it.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
</body>
</html>