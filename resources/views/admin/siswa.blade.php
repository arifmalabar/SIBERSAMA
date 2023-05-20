@extends("admin.template.main")
@section("content")
    @include("admin.content_dashboard.header")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-siswa" data-toggle="modal">
                                    <i class="fa fa-user-plus"></i> Tambah Data
                                </button>
                                @include("admin.modal.modal_tambah_siswa")
                            </div>
                        </div>
                        <div class="card-body">
                            <center><h3>Kelas XI TKJ D</h3></center>
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
