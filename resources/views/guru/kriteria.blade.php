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
                                <button class="btn btn-sm btn-success" data-target="#modal-kriteria-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </button>
                                @include("guru.modal.modal_tambah_kriteria")
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                    <th>Jumlah Bobot</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($data_kriteria as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->nama_kriteria }}</td>
                                    <td>
                                        @php $bobot = 0; @endphp
                                        @foreach($k->jenisk as $jk)
                                            @php $bobot += $jk->bobot_poin @endphp
                                        @endforeach
                                        {{ $bobot }}
                                    </td>
                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-outline-danger" href="/hapuskriteria/{{ $k->kode_kriteria }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                            <button class="btn btn-sm btn-outline-warning" data-target="#modal-kriteria-edit{{ $k->kode_kriteria }}" data-toggle="modal"><i class="fa fa-edit"></i></button>
                                        </center>
                                    </td>
                                    @include('guru.modal.modal_update_kriteria')
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
