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
<h2 style="font-weight:700; color:#ec008c; text-align:center;">LOG BARANG</h2>

@if(count($lb)>0)
<table style="width:100%">
  <tr>
    <th>Barang ID</th>
    <th>Merk</th>
    <th>Warna</th>
    <th>Ukuran</th>
    <th>Kategori Barang</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Foto</th>
    <th>Tanggal Perubahan</th>
    <th>Status</th>
  </tr>
  @foreach($lb as $l)
  <tr>
      <td>{{$l->b_id}}</td>
      <td>{{$l->me_id}}</td>
      <td>{{$l->w_id}}</td>
      <td>{{$l->u_id}}</td>
      <td>{{$l->kb_id}}</td>
      <td>{{$l->b_nama}}</td>
      <td>{{$l->b_harga}}</td>
      <td>{{$l->b_stok}}</td>
      <td>{{$l->b_foto}}</td>
      <td>{{$l->tgl_perubahan}}</td>
      <td>{{$l->status}}</td>
  </tr>
  @endforeach
</table>
@endif

</body>
</html>
