<!DOCTYPE html>
<html>
<head>
<style>
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

<h2>Transaksi Index</h2>
<a href={{url('/transaksi/addTransaksi ')}}><button>Add Transaksi</button></a>
<a href={{url('/transaksi/log')}}><button>Log</button></a>
<button>Function</button>
<button>Procedure</button>
<button>Index</button>
<button>Join</button>
<button>Cursor</button>
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
    <td rowspan="5"><button>Edit</button>
      <br><button>Delete</button></td>
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
      <button formaction="{{url('transaksi/edit')}}" formmethod="get" name="transaksi_id" value="{{$t->t_id}}">Edit</button>
      <br>
      <button formaction="{{url('transaksi/delete')}}" formmethod="get" name="transaksi_id" value="{{$t->t_id}}">Delete</button>
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
