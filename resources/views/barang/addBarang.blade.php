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
	@include('partials.navbars.navbar')
<div class="animatedParent">
<h1 style="text-align:center; margin-bottom:50px; font-weight:700" class="animated fadeIn">ADD BARANG</h1>
	</div>
<center><div style="width:30%; background-color:pink; border-radius:20px;">
	{!! Form::open(['action' => 'BarangController@barangStore','method'=>'POST','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
						{{csrf_field()}}
							
						<div class="col-12">
					    	{{Form::label('b_nama', 'Nama')}}
					    	{{Form::text('b_nama',null, ['class'=>'form-control'])}} 
					    	@if( $errors->has('nama') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('nama') }}</strong>
					    	@endif
					    </div>

					    <br>

					    <div class="col-12">
					    	{{Form::label('me_id', 'Merk')}}
							<select class="form-control" id="me_id" name="me_id">
                @foreach($merk as $m)
                  <option value="{{$m->me_id}}">{{$m->me_nama}}</option>
                @endforeach
              </select>
							
							@if( $errors->has('merk_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('merk') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('w_id', 'Warna')}}
					    	<select class="form-control" id="w_id" name="w_id">
                @foreach($warna as $w)
                  <option value="{{$w->w_id}}">{{$w->w_nama}}</option>
                @endforeach
              </select>
							@if( $errors->has('warna_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('warna_id') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('u_id', 'Ukuran')}}
					    	<select class="form-control" id="u_id" name="u_id">
                @foreach($ukuran as $u)
                  <option value="{{$u->u_id}}">{{$u->u_nama}}</option>
                @endforeach
              </select>
							@if( $errors->has('ukuran_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('ukuran_id') }}</strong>
					    	@endif
					    </div>
					    <br>
					    <div class="col-12">
					    	{{Form::label('kb_id', 'Kategori Barang')}}
					    	<select class="form-control" id="kb_id" name="kb_id">
                @foreach($kategori as $k)
                  <option value="{{$k->kb_id}}">{{$k->kb_nama_jenis}}</option>
                @endforeach
              </select>
							
							@if( $errors->has('kategori_barang_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('kategori_barang_id') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">
					    	{{Form::label('b_harga', 'Harga')}}
							{{Form::text('b_harga',null, ['class'=>'form-control'])}}
							@if( $errors->has('harga') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('harga') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('b_stok', 'Stok')}}
							{{Form::text('b_stok',null, ['class'=>'form-control'])}}
							@if( $errors->has('stok') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('stok') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">      
	                        {{Form::label('b_foto', 'Image')}}
	                        {{ Form::file('b_foto', null, ['class'=>'form-control']) }}
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