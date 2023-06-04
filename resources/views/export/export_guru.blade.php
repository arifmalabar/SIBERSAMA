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
<center><h3>Data Guru</h3></center>
<table border="1" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
    </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($data_guru as $gr)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $gr->NIP }}</td>
            <td>{{ $gr->nama }}</td>
            <td>{{ $gr->username }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
