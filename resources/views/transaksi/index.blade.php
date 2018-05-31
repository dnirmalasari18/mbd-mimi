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
    background: white;
  }

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
  th, td {
    padding: 15px;
}
</style>
</head>
<body>
@include('partials.navbars.navbar')
<center><h2>Transaksi Index</h2>
<a href={{url('/transaksi/addTransaksi ')}}><button class="btn btn-rose">Add Transaksi</button></a>
<a href={{url('/transaksi/log')}}><button class="btn btn-rose">Log</button class="btn btn-rose"></a>
<button class="btn btn-rose">Function</button>
<button class="btn btn-rose">Procedure</button>
<button class="btn btn-rose">Index</button>
<button class="btn btn-rose">Join</button>
<button class="btn btn-rose">Cursor</button></center>
@if(count($transaksi)>0)
<table style="width:100%">
  <tr>
    <th>Member</th>
    <th>Barang</th>
    <th>Jumlah Barang</th>
    <th>Total Harga</th>
    <th>Status Transaksi</th>
    <th></th>
  </tr>
  <tr>
    <td>Nama</td>
    <td>Nama Barang</td>
    <td rowspan="5">Jumlah</td>
    <td rowspan="5">Harga</td>
    <td rowspan="5">Barang</td>
    <td rowspan="5">
      <center><button class="btn btn-rose">Edit</button>
      <br><button class="btn btn-rose">Delete</button></center></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>Merk</td>
  </tr>
  <tr>
    <td>Kecamatan</td>
    <td>Warna</td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>Ukuran</td>
  </tr>
  <tr>
    <td>Provinsi</td>
    <td>Kategori Barang</td>
  </tr>
  @foreach($transaksi as $t)
  @if($t->barang!=NULL)
  <tr>
    <td>{{$t->member->m_nama}}</td>
    <td>{{$t->barang->b_nama}}</td>
    <td rowspan="5">{{$t->t_jumlah_barang}}</td>
    <td rowspan="5">{{$t->t_total_harga}}</td>
    <td rowspan="5">{{$t->t_status_transaksi}}</td>
    <td rowspan="5">
      <form>
      <center><button class="btn btn-rose" formaction="{{url('transaksi/edit')}}" formmethod="get" name="transaksi_id" value="{{$t->t_id}}">Edit</button></center>
      <br>
      <center><button class="btn btn-rose" formaction="{{url('transaksi/delete')}}" formmethod="get" name="transaksi_id" value="{{$t->t_id}}">Delete</button></center>
      </form>
    </td>
  </tr>
  <tr>
    <td>{{$t->member->m_alamat}}</td>
    <td>{{$t->barang->merk->me_nama}}</td>
  </tr>
  <tr>
    <td>{{$t->member->m_kecamatan}}</td>
    <td>{{$t->barang->warna->w_nama}}</td>
  </tr>
  <tr>
    <td>{{$t->member->m_kota}}</td>
    <td>{{$t->barang->ukuran->u_nama}}</td>
  </tr>
  <tr>
    <td>{{$t->member->m_provinsi}}</td>
    <td>{{$t->barang->kategoribarang->kb_nama_jenis}}</td>
  </tr>
  @endif
  @endforeach
</table>
@endif

</body>
</html>
