@extends('admin/template/main')
@section('content')
    @include('admin/content_dashboard/header')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Jurusan</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-jurusan-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("admin.modal.modal_jurusan")
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
                                    @php $no = 1; @endphp
                                    @foreach($data_jurusan as $jurusan)

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $jurusan->nama_jurusan }}</td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-outline-danger btn_del" href="/hapusjurusan/{{ $jurusan->kode_jurusan }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-jurusan-edit{{ $jurusan->kode_jurusan }}"><i class="fa fa-edit"></i></button>
                                            </center>
                                        </td>
                                        @include('admin.modal.modal_edit_jurusan')
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
