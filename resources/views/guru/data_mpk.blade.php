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
                            <h3 class="card-title">Data Jenis Kriteria</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-jurusan-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("guru.modal.modal_tambah_jeniskriteria")
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jurusan</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-outline-danger btn_del" href="/hapusjurusan/" ><i class="fa fa-trash"></i></a>&nbsp;
                                            <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-jurusan-edit"><i class="fa fa-edit"></i></button>
                                        </center>
                                    </td>
                                    @include('guru.modal.modal_update_jeniskriteria')
                                </tr>
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
