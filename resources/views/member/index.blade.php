<!DOCTYPE html>
<html>
<head>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 0.3%;
}
</style>
</head>
<body>

<h1>Member</h1>
@if(count($member)>0)
<table style="width:80%">
  <tr>
    <th>Nama</th>
    <th>Tanggal Lahir</th> 
    <th>Alamat</th>
    <th>Asal</th>
    <th>E-mail</th>
  </tr>
  
  @foreach($member as $m)
  <tr>
    <td rowspan="3">{{$m->nama}}</td>
    <td rowspan="3">{{$m->tanggal_lahir}}</td>
    <td rowspan="2">{{$m->alamat}}</td>
    <td>Kecamatan: {{$m->kecamatan}}</td>
    <td rowspan="3">{{$m->email}}</td>
  </tr>
  <tr>
    <td>Kota: {{$m->kota}}</td>
  </tr>
  <tr>
    <td>Kode Pos: {{$m->kode_pos}}</td>
    <td>Provinsi: {{$m->provinsi}}</td>
  </tr>
  @endforeach
</table>
@endif

</body>
</html>
