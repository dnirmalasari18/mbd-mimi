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
    <td rowspan="3">{{$m->m_nama}}</td>
    <td rowspan="2">{{$m->m_alamat}}</td>
    <td>Kecamatan: {{$m->m_kecamatan}}</td>
    <td rowspan="3">{{$m->m_email}}</td>
  </tr>
  <tr>
    <td>Kota: {{$m->m_kota}}</td>
  </tr>
  <tr>
    <td>Kode Pos: {{$m->m_kode_pos}}</td>
    <td>Provinsi: {{$m->m_provinsi}}</td>
  </tr>
  @endforeach
</table>
@endif

</body>
</html>
