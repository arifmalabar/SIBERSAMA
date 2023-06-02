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
                            <h3 class="card-title">Data Alternatif</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td rowspan="2">Bobot</td>
                                    @foreach($data_kriteria as $k)
                                        <th>{{ $k->nama_kriteria }}</th>
                                    @endforeach
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    @foreach($data_kriteria as $k)
                                        @if($k->jenis_kriteria != NULL)
                                            <td>{{ $k->jenis_kriteria->bobot_poin }}</td>
                                        @elseif($k->jenis_kriteria == NULL)
                                            <td></td>
                                        @endif
                                    @endforeach
                                    <td>{{ $perangkingan_controller->hitJmlKriteria() }}</td>
                                </tr>
                                <tr>
                                    <td>Kepentingan</td>
                                    @foreach($data_kriteria as $k)
                                        @if($k->jenis_kriteria != NULL)
                                            <td>{{ $perangkingan_controller->hitKepentingan( $k->jenis_kriteria->bobot_poin) }}</td>
                                        @elseif($k->jenis_kriteria == NULL)
                                            <td></td>
                                        @endif
                                    @endforeach
                                    <td>{{ $perangkingan_controller->jmlKepetingan() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kepentingan</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>Nama Siswa</td>
                                    @foreach($data_kriteria as $k)
                                        <th>{{ $k->nama_kriteria }}</th>
                                    @endforeach
                                </tr>
                                @php
                                    $jml = 0;
                                    $nilai = [];
                                    @endphp
                                @foreach($data_siswa as $dt)
                                <tr>
                                        <td>{{ $dt->nama_siswa }}</td>
                                        @php
                                            $position =0;
                                            $nisn = $dt->NISN;
                                        @endphp
                                        @foreach($data_kriteria as $k)
                                            @php
                                                $kode_kriteria = $k->jenis_kriteria->kriteria->kode_kriteria;
                                                $total_siswa = $perangkingan_controller->getSiswaByKriteria($nisn, $kode_kriteria);

                                                @endphp
                                            <td>
                                                {{ $total_siswa }}
                                            </td>
                                        @endforeach
                                </tr>

                                @endforeach
                                <tr>
                                    <td>MAX</td>
                                    <td>@php print_r($nilai) @endphp</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
