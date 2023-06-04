<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Pelanggaran</title>
</head>
<body>
    <div>
        <h3>Nama : {{ auth()->guard('siswa')->user()->nama_siswa }}</h3>
        <h3>NISN : {{ auth()->guard('siswa')->user()->NISN }}</h3>
        <h3>Semester : {{ $semester }}</h3>
        <table border="1" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pelanggaran</th>
                <th>Nama Pelanggaran</th>
                <th>Bobot Didapat</th>
            </tr>
            </thead>
            <tbody>
            @php $no =1; $total = 0;@endphp
            @foreach($pelanggaran_data as $pd)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pd->tanggal_pelanggaran }}</td>
                    <td>{{ $pd->jenis_kriteria->kriteria->nama_kriteria }}</td>
                    <td>{{ $pd->jenis_kriteria->bobot_poin }}</td>
                    @php $total += $pd->jenis_kriteria->bobot_poin; @endphp
                </tr>
            @endforeach
            <tr>
            <tr>
                <th colspan="3">Total</th>
                <th>{{ $total; }}</th>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
