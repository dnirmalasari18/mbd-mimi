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
</head>
<body>

	@include('partials.navbars.navbar')
	{!! Form::open(['action' => 'TransaksiController@transaksiStore','method'=>'POST','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
						{{csrf_field()}}

					    <div class="col-12">
					    	{{Form::label('member_id', 'Siapa kamu?')}}
                <select class="form-control" id="member_id" name="member_id">
                  @foreach($member as $me)
                    <option value="{{$me->m_id}}">{{$me->m_nama}}</option>
                  @endforeach
                </select>
                @if( $errors->has('member_id') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('member_id') }}</strong>
					    	@endif
					    </div>

						<br>

            <div class="col-12">
              {{Form::label('barang_id', 'Barang yang mau dibeli')}}
              <select class="form-control" id="barang_id" name="barang_id">
                @foreach($barang as $b)
                  <option value="{{$b->b_id}}">{{$b->b_nama}} size {{$b->ukuran->u_nama}} warna {{$b->warna->w_nama}}</option>
                @endforeach
              </select>
              @if( $errors->has('barang_id') ? ' has-error' : '' )
                <strong>{{ $errors->first('barang_id') }}</strong>
              @endif
            </div>

						<br>

						<div class="col-12">
					    {{Form::label('t_jumlah_barang', 'Jumlah Barang')}}
							{{Form::number('t_jumlah_barang',null, ['class'=>'form-control'])}}
							@if( $errors->has('jumlah_barang') ? ' has-error' : '' )
					    		<strong>{{ $errors->first('jumlah_barang') }}</strong>
					    	@endif
					    </div>
					    <br>

						<div class="dorne-add-listings-btn">
							<br><center>
							{{Form::submit('Submit',['class'=>'btn btn-rose'])}}
						</center>
						</div>
						{!! Form::close() !!}
</body>
</html>
