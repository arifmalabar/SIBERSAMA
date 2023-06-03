<div class="col-lg-12">
    <div class="card">
        <div class="card-header bg-danger">
            <h3 class="card-title">
                <i class="fa fa-clipboard"></i>
                Pelanggaran Hari Ini
            </h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggar</th>
                    <th>Jenis Pelanggaran</th>
                    <th>Nama Pelanggaran</th>
                    <th>Jumlah Poin</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($pelanggaran->getDataPelanggaranBulan() as $pg)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pg->siswa->nama_siswa }}</td>
                    <td>{{ $pg->jenis_kriteria->kriteria->nama_kriteria }}</td>
                    <td>{{ $pg->jenis_kriteria->jenis_kriteria }}</td>
                    <td><center><span class="badge badge-danger">{{ $pg->jenis_kriteria->bobot_poin }}</span></center></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
