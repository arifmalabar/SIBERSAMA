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
                                <a class="btn btn-sm btn-success" href="/exportjeniskriteria/">
                                    <i class="fa fa-print"></i> Export Data
                                </a>
                                <button class="btn btn-sm btn-success" data-target="#modal-jeniskriteria-tambah" data-toggle="modal">
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
                                    <th>Nama Kriteria</th>
                                    <th>Jenis kriteria</th>
                                    <th>Bobot</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no = 1 @endphp
                                    @foreach($jenis_kriteria as $jk)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $jk->kriteria->nama_kriteria }}</td>
                                            <td>{{ $jk->jenis_kriteria }}</td>
                                            <td>{{ $jk->bobot_poin }}</td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-sm btn-outline-danger btn_del" href="/hapusjeniskriteria/{{ $jk->kode_jenis_kriteria }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                    <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-jeniskriteria-update{{ $jk->kode_jenis_kriteria }}"><i class="fa fa-edit"></i></button>
                                                </center>
                                            </td>
                                            @include('guru.modal.modal_update_jeniskriteria')
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
