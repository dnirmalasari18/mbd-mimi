<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MiMi's</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
@include('partials.navbars.navbar')
	
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
	  @if($b!=null)
	  <tr>
		<td rowspan="6">Foto<br>{{$b->nama}}</td>
		<td>Merk: {{$b->merk->me_nama}}</td>
		<td rowspan="6"><form>
			<center><button class="btn btn-rose" formmethod="get" formaction="/editBarang" type="submit" name="barang_id" value="{{$b->b_id}}">Edit</button><br></center>
			<center><button class="btn btn-rose" formmethod="get" formaction="/deleteBarang" type="submit" name="barang_id" value="{{$b->b_id}}">Delete</button></center>
			</form>
		  </td>
	  </tr>
	  <tr>
		<td>Warna: {{$b->warna->w_nama}}</td>
	  </tr>
	  <tr>
		<td>Ukuran: {{$b->ukuran->u_nama}}</td>
	  </tr>
	  <tr>
		<td>Kategori: {{$b->kategoriBarang->kb_nama_jenis}}</td>
	  </tr>
	  <tr>
		<td>Harga: {{$b->b_harga}}</td>
	  </tr>
	  <tr>
		<td>Stok: {{$b->b_stok}}</td>
	  </tr>
	  @endif
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
