<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MiMi's</title>
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
    border: 2px solid #ec008c;
    border-collapse: collapse;
	background: pink;
	
}
  th, td {
    padding: 15px;
	  text-align: center;
	  color: #ec008c;
}
</style>
</head>
<body>
@include('partials.navbars.navbar')
<h2 style="font-weight:700; color:#ec008c; text-align:center;">View menampilkan nama barang yang dibeli jumlahnya lebih dari 10</h2>

@if(count($vBarang)>0)
<center><table style="width:40%">
  <tr>
    <th>Nama Barang</th>
  </tr>
  @foreach($vBarang as $v)
  <tr>
      <td>{{$v->b_nama}}</td>
  </tr>
  @endforeach
</table></center>
@endif

</body>
</html>
