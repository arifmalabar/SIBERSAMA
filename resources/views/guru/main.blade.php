@extends("guru.template.template")
@section("content")
    @include("guru.section.header")
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include("guru.section.atas")
                @include("guru.section.chart_pelanggar")
                @include("guru.section.count_data_pelanggaran")
                @include("guru.section.semester")
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
