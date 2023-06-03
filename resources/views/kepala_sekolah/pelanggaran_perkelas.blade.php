@extends("kepala_sekolah.template.template")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('template_error.message_request_error')
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-siswa" data-toggle="modal">
                                    <i class="fa fa-print"></i> Cetak Export
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <center><h4>Jumlah Siswa : {{ count($data_siswa) }}</h4></center>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama SIswa</th>
                                    <th>Jumlah Pelanggaran</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach($data_siswa as $ds)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $ds->NISN }}</td>
                                    <td>{{ $ds->nama_siswa }}</td>
                                    <td>
                                        @php $sum=0; @endphp
                                        @foreach($ds->data_pelanggar as $dp)
                                            @php $sum += $dp->jenis_kriteria->bobot_poin @endphp
                                        @endforeach
                                        {{ $sum }}
                                    </td>
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
