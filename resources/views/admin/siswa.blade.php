@extends("admin.template.main")
@section("content")
    @include("admin.content_dashboard.header")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-jurusan-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("admin.modal.modal_jurusan")
                            </div>
                        </div>
                        <div class="card-body">
                            <center><h3>Kelas XI TKJ D</h3></center>
                            <center><h4>Jumlah Siswa : 30</h4></center>
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
                                    <tr>
                                        <td>1</td>
                                        <td>2118055</td>
                                        <td>Ridho Arif W</td>
                                        <td>ridho@gmail.com</td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-outline-danger btn_del" href="/hapusjurusan/" ><i class="fa fa-trash"></i></a>&nbsp;
                                                <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-jurusan-edit"><i class="fa fa-edit"></i></button>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
