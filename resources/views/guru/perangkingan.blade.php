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
                                            echo '<td>'.$data_kepentingan[$i].'</td>';
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
                                            }
                                        }
                                        for ($i = 0; $i < count($nilai); $i++){
                                            for ($s = 0; $s < count($nilai[$i]); $s++){
                                                if($nilai[$i][$s] >= $data_max[$s]){
                                                    $data_max[$s] = $nilai[$i][$s];
                                                }
                                                //echo $data_max[$s]."<br>";
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ranking</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>Nama Siswa</td>
                                    <th>Hasil</th>
                                    <th>Rangking</th>
                                </tr>
                                @php
                                    $baris = 0;
                                    $temp_nama = "";
                                    $temp_nilai = 0.0;
                                    $perangkingan = [];
                                    $hasil_perankingan =[];
                                    for ($i = 0; $i < count($nilai); $i++)
                                    {
                                        $hasil_jumlah = 0.0;
                                        for ($j = 0; $j < count($nilai[$i]); $j++)
                                        {
                                            $hasil_jumlah += $nilai[$i][$j] * $data_kepentingan[$j]." ";
                                            $perangkingan[$i] = $hasil_jumlah;
                                        }
                                    }
                                    foreach ($data_siswa as $dt){
                                        $hasil_perankingan[$baris]['nama_siswa'] = $dt->nama_siswa;
                                        $hasil_perankingan[$baris]['nilai_perangkingan'] = $perangkingan[$baris];
                                        $baris++;
                                    }
                                    for ($i = 0 ; $i < count($hasil_perankingan) - 1; $i++)
                                    {
                                        for ($x = 0; $x < count($hasil_perankingan)- 1; $x++)
                                        {
                                            if($hasil_perankingan[$x]['nilai_perangkingan'] < $hasil_perankingan[$x+1]['nilai_perangkingan']){
                                                $temp_nama = $hasil_perankingan[$x]['nama_siswa'];
                                                $temp_nilai = $hasil_perankingan[$x]['nilai_perangkingan'];
                                                $hasil_perankingan[$x]['nama_siswa'] = $hasil_perankingan[$x+1]['nama_siswa'];
                                                $hasil_perankingan[$x]['nilai_perangkingan'] = $hasil_perankingan[$x+1]['nilai_perangkingan'];
                                                $hasil_perankingan[$x+1]['nama_siswa'] = $temp_nama;
                                                $hasil_perankingan[$x+1]['nilai_perangkingan'] = $temp_nilai;
                                            }
                                        }
                                    }
                                    $rank =1;
                                    foreach($hasil_perankingan as $hp)
                                    {
                                        echo '<tr>';
                                        echo '<td>'.$hp['nama_siswa'].'</td>';
                                        echo '<td>'.$hp['nilai_perangkingan'].'</td>';
                                        echo '<td>'.$rank++.'</td>';
                                        echo '</tr>';
                                    }
                                //print_r($hasil_perankingan);
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
