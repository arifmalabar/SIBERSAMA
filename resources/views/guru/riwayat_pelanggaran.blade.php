@extends("guru.template.template")
@section("content")
    @include("guru.section.header")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('template_error.message_request_error')
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Riwayat Pelanggaran</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-info" data-target="#modal-entry-pelanggaran" data-toggle="modal">
                                    <i class="fa fa-print"></i> Cetak Pelanggaran
                                </button>
                                <button class="btn btn-sm btn-success" data-target="#modal-entry-pelanggaran" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("guru.modal.modal_tambah_pelanggaran")
                            </div>
                        </div>
                        @foreach($data_siswa as $s)
                        <div class="card-body">
                            <h4>Nama Pelanggar : {{ $s->nama_siswa }}</h4>
                            <h4>NISN: {{ $s->NISN }}</h4>
                            <h4>Total Poin: {{ $jml_bobot }}</h4>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggaran</th>
                                    <th>Jumlah Poin</th>
                                    <th>Tanggal Pelanggaran</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($s->data_pelanggar as $dp)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $dp->jenis_kriteria->jenis_kriteria }}</td>
                                        <td>{{ $dp->jenis_kriteria->bobot_poin }}</td>
                                        <td>{{ $dp->tanggal_pelanggaran }}</td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-outline-danger" href="/hapuspelanggaran/{{ $dp->kode_pelanggaran }}/{{ $NISN }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                <button class="btn btn-sm btn-outline-warning" data-target="#modal-update-edit{{ $dp->kode_pelanggaran }}" data-toggle="modal"><i class="fa fa-edit"></i></button>
                                            </center>
                                            @include('guru.modal.modal_update_pelanggaran')
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
