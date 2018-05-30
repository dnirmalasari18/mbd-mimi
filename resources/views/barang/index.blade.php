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
@if(count($barang)>0)
  <table style="width:50%">
      <tr>
        <th>Barang</th>
        <td>Keterangan</td>
      </tr>
  @foreach($barang as $b)
      <tr>
        <th rowspan="7">Sebuah foto</th>
        <td>Nama: {{$b->nama}}</td>
      </tr>
      <tr>
        <td>Merk: {{$b->merk->nama_merk}}</td>
      </tr>
      <tr>
        <td>Warna: {{$b->warna->nama_warna}}</td>
      </tr>
      <tr>
        <td>Ukuran: {{$b->ukuran->ukuran}}</td>
      </tr>
      <tr>
        <td>Kategori Barang: {{$b->kategoriBarang->nama_kategori}}</td>
      </tr>
      <tr>
        <td>Harga: {{$b->harga}}</td>
      </tr>
      <tr>
        <td>Stok: {{$b->stok}}</td>
      </tr>
  @endforeach
  </table>
@endif
</body>
</html>
