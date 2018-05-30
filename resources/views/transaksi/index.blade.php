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
<a href={{url('/barang/log')}}><button>Log</button></a>
<button>Function</button>
<button>Procedure</button>
<button>Index</button>
<button>Join</button>
<button>Cursor</button>
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
</table>


</body>
</html>
