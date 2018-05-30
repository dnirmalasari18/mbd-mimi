<!DOCTYPE html>
<html>
<head>

</head>
<body>
	{!! Form::model($transaksi,['url' => 'transaksi/edit/'.$transaksi->t_id,'method'=>'POST','enctype' => 'multipart/form-data','autocomplete'=>'off']) !!}
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
							<br>
							{{Form::submit('Submit',['class'=>'btn dorne-btn'])}}
						</div>
						{!! Form::close() !!}
</body>
</html>
