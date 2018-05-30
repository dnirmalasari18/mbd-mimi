<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	{!! Form::model($barang,['url' => 'editBarang/update/'.$barang->id,'method'=>'put','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
						{{csrf_field()}}
							
						<div class="col-12">
					    	{{Form::label('nama', 'Nama')}}
					    	{{Form::text('nama',null, ['class'=>'form-control'])}} 
					    	@if( $errors->has('nama') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('nama') }}</strong>
					    	@endif
					    </div>

					    <br>

					    <div class="col-12">
					    	{{Form::label('merk_id', 'Merk')}}
							{{Form::select('merk_id',[''=>'','1'=>'AIRA BY ELZATTA','2'=> 'AIRA MUSLIM BUTIK','3'=>'BELLISMIA','4'=>'BELLYBEE','5'=>'BONITA','6'=>'KAMI IDEA','7'=>'KAMILAA','8'=>'KHANAAN','9'=>'LUBNA','10'=>'MADELEINE','11'=>'MALAIKA','12'=>'MECCANISM','13'=>'MINA','14'=>'NASHWA','15'=>'NRH X NABILIA','16'=>'NUBER','17'=>'PINK SUGAR','18'=>'RIA MIRADA','19'=>'SABAA','20'=>'SAN MARCO','21'=>'SCALA','22'=>'SIMPLICITY','23'=>'SYAFINA','24'=>'VIVI ZUBEDI','25'=>'WHITEMODE','26'=>'YRUMI','27'=>'ZAHRA  SIGNATURE','28'=>'ZALIA','29'=>'ZELENA','30'=>'ZUMARA'],null, ['class'=>'form-control'])}}
							@if( $errors->has('merk_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('merk') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('warna_id', 'Warna')}}
							{{Form::select('warna_id',[''=>'','1'=>'Beige','2'=> 'Black','3'=>'Blue','4'=>'Brown','5'=>'Gold','6'=>'Green','7'=>'Grey','8'=>'Multi','9'=>'Navy','10'=>'Orange','11'=>'Pink','12'=>'Purple','13'=>'Red','14'=>'Silver','15'=>'White','16'=>'Yellow','17'=>'Maroon','18'=>'Peach','19'=>'Bone','20'=>'Nude','21'=>'Tosca','22'=>'Fuschia','23'=>'Aqua','24'=>'Aero','25'=>'Almond','26'=>'Amber','27'=>'Cream','28'=>'Dandelion','29'=>'Desire','30'=>'Yellow'],null, ['class'=>'form-control'])}}
							@if( $errors->has('warna_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('warna_id') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('ukuran_id', 'Ukuran')}}
							{{Form::select('ukuran_id',[''=>'','1'=>'XS','2'=> 'S','3'=>'M','4'=>'L','5'=>'XL','6'=>'XXL','7'=>'ALL SIZE'],null, ['class'=>'form-control'])}}
							@if( $errors->has('ukuran_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('ukuran_id') }}</strong>
					    	@endif
					    </div>
					    <br>
					    <div class="col-12">
					    	{{Form::label('kategori_barang_id', 'Kategori Barang')}}
							{{Form::select('kategori_barang_id',[''=>'','1'=>'Dress Muslim','2'=> 'Atasan Muslim','3'=>'Hijab','4'=>'Bawahan Muslim','5'=>'Outwear Muslim','6'=>'Perlengkapan Sholat'],null, ['class'=>'form-control'])}}
							@if( $errors->has('kategori_barang_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('kategori_barang_id') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">
					    	{{Form::label('harga', 'Harga')}}
							{{Form::text('harga',null, ['class'=>'form-control'])}}
							@if( $errors->has('harga') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('harga') }}</strong>
					    	@endif
					    </div>
							
						<br>

						<div class="col-12">
					    	{{Form::label('stok', 'Stok')}}
							{{Form::text('stok',null, ['class'=>'form-control'])}}
							@if( $errors->has('stok') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('stok') }}</strong>
					    	@endif
					    </div>
							
						<br>
						<div class="col-12">      
	                        {{Form::label('foto', 'Image')}}
	                        {{ Form::file('foto', null, ['class'=>'form-control']) }}
	                        @if( $errors->has('image') ? ' has-error' : '' )
	                            <strong>{{ $errors->first('image') }}</strong>
	                        @endif
	                    </div>
					    <br>
						<div class="dorne-add-listings-btn">
							<br>
							{{Form::submit('Submit',['class'=>'btn dorne-btn'])}}
						</div>
						{!! Form::close() !!}
</body>
</html>