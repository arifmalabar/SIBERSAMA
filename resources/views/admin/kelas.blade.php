@extends("admin.template.main")
@section("content")
    @include('admin/content_dashboard/header')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kelas</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-jurusan-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("admin.modal.modal_kelas")
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach($data_kelas as $kelas)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $kelas->nama_kelas }}</td>
                                        <td><center><span class="badge badge-success">{{ $kelas->jurusan->nama_jurusan }}</span></center></td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-outline-danger btn_del" href="/hapuskelas/{{ $kelas->kode_kelas }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="modal-jurusan-update{{ $kelas->kode_kelas }}"><i class="fa fa-edit"></i></button>
                                            </center>
                                        </td>
                                    </tr>
                                    @include('admin.modal.modal_kelas_edit')
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
