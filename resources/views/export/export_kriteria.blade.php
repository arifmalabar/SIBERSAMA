<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Kriteria</title>
</head>
<body>
<center><h3>Export Kriteria</h3></center>
<table border="1" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Kriteria</th>
        <th>Jumlah Bobot</th>
    </tr>
    </thead>
    <tbody>
    @php
        $no = 1;
    @endphp
    @foreach($data_kriteria as $k)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $k->nama_kriteria }}</td>
            <td>
                @php $bobot = 0; @endphp
                @foreach($k->jenisk as $jk)
                    @php $bobot += $jk->bobot_poin @endphp
                @endforeach
                {{ $bobot }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
