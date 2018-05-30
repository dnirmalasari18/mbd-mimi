<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<h2>Baranng</h2>
<a href={{url('/barang/addBarang')}}><button>Add Barang</button></a>
<button>Function</button>
<button>Procedure</button>
<button>Index</button>
<button>Join</button>
<button>Cursor</button>
@if(count($barang)>0)
  <table style="width:50%">
      <tr>
        <th>Barang</th>
        <th>Keterangan</th>
        <th></th>
      </tr>
  @foreach($barang as $b)
  <tr>
    <td rowspan="6">Foto<br>{{$b->nama}}</td>
    <td>Merk{{$b->merk->nama_merk}}</td>
    <td rowspan="6"><button>Edit</button><button>Delete</button></td>
  </tr>
  <tr>
    <td>Warna{{$b->warna->nama_warna}}</td>
  </tr>
  <tr>
    <td>Ukuran{{$b->ukuran->ukuran}}</td>
  </tr>
  <tr>
    <td>Kategori{{$b->kategoriBarang->nama_kategori}}</td>
  </tr>
  <tr>
    <td>Harga{{$b->harga}}</td>
  </tr>
  <tr>
    <td>Stok{{$b->stok}}</td>
  </tr>
  @endforeach
  </table>
@endif
</body>
</html>
