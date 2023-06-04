<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Pelanggaran Siswa</title>
</head>
<body>
@foreach($data_siswa as $s)
    <div>
        <h4>Nama Pelanggar : {{ $s->nama_siswa }}</h4>
        <h4>NISN: {{ $s->NISN }}</h4>
        <h4>Total Poin: {{ $jml_bobot }}</h4>
        <table border="1" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggaran</th>
                <th>Tanggal Pelanggaran</th>
                <th>Jumlah Poin</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($s->data_pelanggar as $dp)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $dp->jenis_kriteria->jenis_kriteria }}</td>
                    <td>{{ $dp->tanggal_pelanggaran }}</td>
                    <td>{{ $dp->jenis_kriteria->bobot_poin }}</td>
                </tr>
            @endforeach
            <tr>
                <th colspan="3">Total</th>
                <td>{{ $jml_bobot }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endforeach
</body>
</html>
