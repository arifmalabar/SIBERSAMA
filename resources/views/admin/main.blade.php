@extends('admin/template/main')
@section('content')
    @include('admin/content_dashboard/header')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('admin/content_dashboard/count')
            <div class="row">
                @include('admin/content_dashboard/biodata_sklh')
                @include('admin/content_dashboard/last_access')
                @include('admin/content_dashboard/operator')
                @include('admin/content_dashboard/hitung_guru')
                @include('admin/content_dashboard/jabatan')
                @include('admin/content_dashboard/pangkat')
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
