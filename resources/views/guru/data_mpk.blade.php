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
                            <h3 class="card-title">Data MPK</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-mpk-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include('guru.modal.modal_tambah_mpk')
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; $tahun = date('Y') @endphp
                                @foreach($data_mpk as $mpk)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $mpk->NISN }}</td>
                                    <td>{{ $mpk->siswa->nama_siswa }}</td>
                                    <td>{{ ($mpk->tahun_periode_aktif > $tahun && $mpk->tahun_periode_non < $tahun) ? "Aktif" : "Tidak Aktif" }}</td>
                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-outline-danger" href="/hapusmpk/{{ $mpk->kode_anggota }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                            <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-mpk-update{{ $mpk->kode_anggota }}"><i class="fa fa-edit"></i></button>
                                        </center>
                                    </td>
                                    @include('guru.modal.modal_update_mpk')
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
