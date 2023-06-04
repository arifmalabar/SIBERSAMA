<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Jenis Kriteria</title>
</head>
<body>
    @foreach($data_kriteria as $jk)
        <div>
            <h3>{{ $jk->nama_kriteria }}</h3>
            <table border="1" width="100%">
                <tr>
                    <th>No</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                </tr>
                @php $no=1  ; @endphp
                @foreach($jk->jenisk as $js)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $js->jenis_kriteria }}</td>
                    <td>{{ $js->bobot_poin }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    @endforeach
</body>
</html>
