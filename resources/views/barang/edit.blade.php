<!DOCTYPE html>
<html>
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
	
	<center><div style="width:40%; background-color:pink; border-radius:20px;">
	{!! Form::model($barang,['url' => 'editBarang/update/'.$barang->b_id,'method'=>'put','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
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
</body>
</html>