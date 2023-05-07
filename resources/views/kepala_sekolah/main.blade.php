@extends("kepala_sekolah/template/template")
@section("content")
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @include("kepala_sekolah.section.awal_count_pelanggaran")
            </div>
            <div class="row">
                @include("kepala_sekolah.section.informasi")
                @include("kepala_sekolah.section.helpdesk")
                @include("kepala_sekolah.section.chart_pelanggar")
                @include("kepala_sekolah.section.count_data_pelanggaran")
                @include("kepala_sekolah.section.pelanggar")
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
