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
                            <h3 class="card-title">Data Siswa</h3>
                            <div class="card-tools">
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
                                                <a class="btn btn-sm btn-outline-success btn_del" href="/hapussiswa/" >Riwayat Pelanggaran</a>&nbsp;
                                                <a class="btn btn-sm btn-outline-danger btn_del" data-toggle="modal" data-target="#modal-entry-pelanggaran{{ $siswa->NISN }}" href="#" >Entry Pelanggaran</a>&nbsp;
                                            </center>
                                        </td>
                                        @include('guru.modal.modal_tambah_pelanggaran')
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
