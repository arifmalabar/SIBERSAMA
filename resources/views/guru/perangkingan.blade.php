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
                                    @php
                                        $total_bobot = [];
                                        $idx = 0;
                                        foreach ($data_kriteria as $k){
                                            $jml_bobot =0;
                                            foreach ($k->jenisk as $jk)
                                            {
                                                $jml_bobot += $jk->bobot_poin;
                                                $total_bobot[$idx] = $jml_bobot;
                                            }
                                            $idx++;
                                            echo '<td>'.$jml_bobot.'</td>';
                                        }
                                        @endphp
                                    <td>{{ $perangkingan_controller->hitJmlKriteria() }}</td>
                                </tr>
                                <tr>
                                    <td>Kepentingan</td>
                                    @php
                                        $data_kepentingan = [];
                                       for ($i = 0; $i < count($total_bobot); $i++)
                                       {
                                           $data_kepentingan[$i] = $perangkingan_controller->hitKepentingan($total_bobot[$i]);
                                            echo '<td>'.$perangkingan_controller->hitKepentingan($total_bobot[$i]).'</td>';
                                       }
                                    @endphp
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
                                    $idx = 0;
                                    $baris = 0;
                                    foreach ($data_siswa as $dt){
                                        echo '<tr>';
                                        echo '<td>'.$dt->nama_siswa.'</td>';
                                        $kolom  = 0;
                                        $nisn = $dt->NISN;
                                        foreach ($data_kriteria as $k){
                                            foreach ($k->jenisk as $jk)
                                            {
                                                $kode_kriteria = $jk->kode_kriteria;
                                                $total_siswa = $perangkingan_controller->getSiswaByKriteria($nisn, $kode_kriteria);
                                                $nilai[$baris][$kolom] = $total_siswa;
                                            }
                                            echo "<td>".$total_siswa."</td>";
                                            $kolom++;
                                        }
                                        $baris++;
                                        echo '</tr>';
                                    }
                                @endphp

                                <tr>
                                    <td>MAX</td>
                                    @php
                                        $data_max = array();
                                        for ($i = 0; $i < count($nilai); $i++){
                                            for ($s = 0; $s < count($nilai[$i]); $s++){
                                                $data_max[$s] = 0;
                                                if($nilai[$i][$s] >= $data_max[$s]){
                                                    $data_max[$s] = $nilai[$i][$s];
                                                }
                                            }
                                        }
                                        foreach ($data_max as $a){
                                            echo '<td>'.$a.'</td>';
                                        }
                                    @endphp
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Normalisasi</h3>
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
                                    $hasil_normal = [];
                                    $baris = 0;
                                    //print_r($data_max);
                                    foreach ($data_siswa as $dt){
                                        echo '<tr>';
                                        echo '<td>'.$dt->nama_siswa.'</td>';
                                        $kolom  = 0;
                                        $nisn = $dt->NISN;
                                        $kolom = 0;
                                        foreach($data_kriteria as $k){
                                            //echo $nilai[$baris][$kolom]."/".$data_max[$kolom]."<br>" ;
                                            if($nilai[$baris][$kolom] != 0 && $data_max[$kolom] != 0)
                                            {
                                                $hasil_normal[$baris][$kolom] = $nilai[$baris][$kolom] / $data_max[$kolom];
                                            } else {
                                                $hasil_normal[$baris][$kolom] = 0;
                                            }
                                            echo '<td>'.$hasil_normal[$baris][$kolom].'</td>';
                                            $kolom++;
                                        }
                                        echo '</tr>';
                                        $baris++;
                                    }
                                @endphp
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
