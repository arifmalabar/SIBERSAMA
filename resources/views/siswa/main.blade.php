@extends('siswa/template/template')
@section('content')
@include('siswa/section/atas')
<div class="row">
  @include('siswa/section/panduan')
  @include('siswa/section/helpdesk')
</div>
<div class="row">
  @include('siswa/section/akun')
  @include('siswa/section/informasi')
  @include('siswa/section/tabel_pelanggaran')
  @include('siswa/modal/modal_sorting_pelanggaran')
</div>
@endsection
