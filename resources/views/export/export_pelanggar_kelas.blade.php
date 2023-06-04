<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Pelanggar Kelas</title>
</head>
<body>
<h3>Nama Kelas : {{ $kelas }}</h3>
<table border="1" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama SIswa</th>
        <th>Jumlah Pelanggaran</th>
    </tr>
    </thead>
    <tbody>
    @php $no=1; $total = 0;@endphp
    @foreach($data_siswa as $ds)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $ds->NISN }}</td>
            <td>{{ $ds->nama_siswa }}</td>
            <td>
                @php $sum=0; @endphp
                @foreach($ds->data_pelanggar as $dp)
                    @php $sum += $dp->jenis_kriteria->bobot_poin @endphp
                @endforeach
                {{ $sum }}
                @php $total += $sum @endphp
            </td>
        </tr>
    @endforeach
    <tr>
        <th colspan="3">Total Pelanggaran</th>
        <td>{{ $total }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
