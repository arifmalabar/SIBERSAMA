@extends("admin.template.main")
@section("content")
    @include('admin/content_dashboard/header')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="col-md-12 connectedSortable ui-sortable">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Data Guru</h3>
                        <div class="card-tools">
                            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success btn-sm pull-left"><i class="fa fa-plus"></i> Akun Guru</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                    <div class="modal fade" id="modal-default">
                        <form action="" method="post">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h4 class="modal-title">Tambah Data Guru</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>Nama Guru</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" onkeyup="gede()" id="nama" name="nama" class="form-control" placeholder="Nama Guru">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                        </div>
                                        <input type="email" name="username" id="email" class="form-control" placeholder="guru@sch.id">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="Password" name="password" class="form-control" placeholder="password Guru">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                <button type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Akun Guru</button>
                            </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        </form>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>OPSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kirana</td>
                            <td>kirana@gmail.com</td>
                            <td><span class="badge badge-success">Diaktifkan</span></td>
                            <td><button type="button" data-toggle="modal" data-target="#modal-edit" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></button>&nbsp;<a type="button" href="" class="btn btn-outline-danger btn-sm btn-hapus"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <div class="modal fade" id="modal-edit">
                            <form action="" method="post">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                    <h4 class="modal-title">Ubah Data Guru</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>Nama Guru</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" name="nama" value="" onkeyup="gede()" class="form-control" placeholder="Nama Guru">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                        </div>
                                        <input type="email" value="" name="username" class="form-control" placeholder="kasir@net.com">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="Password" name="password" class="form-control" placeholder="password kasir">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> Akun Guru</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                                </div>
                            </form>
                        </div>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                </div>
        </section>

        <!-- /.content -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
