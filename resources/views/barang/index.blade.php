<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pray.in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('/img/logo/logo_atas_katholik.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
	<!-- Animation -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/animations.css')}}" type="text/css">
	<link href="{{asset('css/material-kitpro.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap3.css')}}">
	<link rel="stylesheet" href="{{asset('css/salvattore.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
	border: 3px solid #bc4e9c;
		border-radius: 5px;
	
}
	th{
		background: #ec008c;
		color: white;
		text-align: center;
	}
	.tabelbarang{
		background: pink;
	}
	table tr td{
		border: 3px solid #bc4e9c;
		border-radius: 5px;
		font-weight: 700;
	}
	table{
		border-radius: 5px;
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
	
<h2 style="text-align:center; font-size:50px; font-weight:700">BARANG</h2>
<center><a href={{url('/barang/addBarang')}}><button class="btn btn-rose btn-round">Add Barang</button></a>
<a href={{url('/barang/log')}}><button class="btn btn-rose btn-round">Log</button></a>
<button class="btn btn-rose btn-round">Function</button>
<button class="btn btn-rose btn-round">Procedure</button>
<button class="btn btn-rose btn-round">Index</button>
<button class="btn btn-rose btn-round">Join</button>
	<button class="btn btn-rose btn-round">Cursor</button></center>

<div class="tabelbarang" style="margin-bottom:50px;">		
	@if(count($barang)>0)
	  <table align="center" style="width:50%; margin-top: 100px;">
		  <tr>
			<th>Barang</th>
			<th>Keterangan</th>
			<th></th>
		  </tr>
	  @foreach($barang as $b)
	  <tr>
		<td rowspan="6">Foto<br>{{$b->nama}}</td>
		<td>Merk: {{$b->merk->nama_merk}}</td>
		<td rowspan="6"><form>
			<center><button class="btn btn-rose" formmethod="get" formaction="/editBarang" type="submit" name="barang_id" value="{{$b->id}}">Edit</button><br></center>
			<center><button class="btn btn-rose" formmethod="get" formaction="/deleteBarang" type="submit" name="barang_id" value="{{$b->id}}">Delete</button></center>
			</form>
		  </td>
	  </tr>
	  <tr>
		<td>Warna: {{$b->warna->nama_warna}}</td>
	  </tr>
	  <tr>
		<td>Ukuran: {{$b->ukuran->ukuran}}</td>
	  </tr>
	  <tr>
		<td>Kategori: {{$b->kategoriBarang->nama_kategori}}</td>
	  </tr>
	  <tr>
		<td>Harga: {{$b->harga}}</td>
	  </tr>
	  <tr>
		<td>Stok: {{$b->stok}}</td>
	  </tr>
	  @endforeach
	  </table>
	@endif
	</div>
	
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
