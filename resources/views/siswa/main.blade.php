@extends('siswa/template/template')
@section('content')
@include('siswa/section/status')
@include('siswa/section/atas')
<div class="row">
  @include('siswa/section/panduan')
  @include('siswa/section/helpdesk')
</div>
@endsection