@extends('siswa/template/template')
@section('content')
@include('siswa/section/status')
@include('siswa/section/atas')
<div class="row">
  @include('siswa/section/panduan')
  @include('siswa/section/helpdesk')
</div>
<div class="row">
  @include('siswa/section/akun')
  @include('siswa/section/informasi', array("data" => "oke"))
  <div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header bg-success">
            <h3 class="card-title"> Presentase Pelanggaran</h3>
            <div class="card-tools">
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-search"></i>  
                Shorting
              </button>
            </div>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="presentase" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
  </div>
  @include('siswa/section/tabel_pelanggaran')
  @include('siswa/modal/modal_sorting_pelanggaran')
</div>
@endsection