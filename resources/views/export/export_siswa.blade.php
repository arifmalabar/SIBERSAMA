<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Data Siswa</title>
</head>
<body>
<center><h3>Data Siswa</h3></center>
<h3>Kelas {{ $kelas }}</h3>
<h4>Jumlah Siswa : {{ count($data_siswa) }}</h4>
<table border="1" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama SIswa</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($data_siswa as $siswa)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $siswa->NISN }}</td>
            <td>{{ $siswa->nama_siswa }}</td>
            <td>{{ $siswa->username }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
