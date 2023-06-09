@extends("admin.template.main")
@section("content")
    @include("admin.content_dashboard.header")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('template_error.message_request_error')
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                            <div class="card-tools">
                                <a class="btn btn-sm btn-success" href="/export_siswa/{{ $id }}">
                                    <i class="fa fa-print"></i> Export Siswa
                                </a>
                                <button class="btn btn-sm btn-success" data-target="#modal-siswa" data-toggle="modal">
                                    <i class="fa fa-user-plus"></i> Tambah Data
                                </button>
                                @include("admin.modal.modal_tambah_siswa")
                            </div>
                        </div>
                        <div class="card-body">
                            <center><h3>Kelas {{ $kelas }}</h3></center>
                            <center><h4>Jumlah Siswa : {{ count($data_siswa) }}</h4></center>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama SIswa</th>
                                    <th>Username</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data_siswa as $siswa)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $siswa->NISN }}</td>
                                            <td>{{ $siswa->nama_siswa }}</td>
                                            <td>{{ $siswa->username }}</td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-sm btn-outline-danger btn_del" href="/hapussiswa/{{ $id }}/{{ $siswa->NISN }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                    <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-update-siswa{{ $siswa->NISN }}"><i class="fa fa-edit"></i></button>
                                                </center>
                                            </td>
                                            @include("admin.modal.modal_edit_siswa")
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
@endsection
