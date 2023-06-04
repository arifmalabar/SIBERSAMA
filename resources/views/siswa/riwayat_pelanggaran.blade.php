@extends("siswa.template.template")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('template_error.message_request_error')
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pelanggaran</h3>
                            <div class="card-tools">
                                <a class="btn btn-sm btn-success" href="/siswa/exportRiwayatSiswa/{{ $semester }}">
                                    <i class="fa fa-print"></i> Cetak
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pelanggaran</th>
                                    <th>Nama Pelanggaran</th>
                                    <th>Bobot Didapat</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no =1;@endphp
                                @foreach($pelanggaran_data as $pd)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pd->tanggal_pelanggaran }}</td>
                                        <td>{{ $pd->jenis_kriteria->kriteria->nama_kriteria }}</td>
                                        <td>{{ $pd->jenis_kriteria->bobot_poin }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
