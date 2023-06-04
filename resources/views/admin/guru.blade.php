@extends("admin.template.main")
@section("content")
    @include('admin/content_dashboard/header')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @include('template_error.message_request_error')
            <div class="col-lg-12">
                <div class="card" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <a class="btn btn-info" href="/export_guru/">
                                    <i class="fa fa-print"></i> Export To PDF
                                </a>
                            </div>
                            <div class="col-lg-2">
                                &nbsp;
                                <button class="btn btn-success" data-target="#modal-guru-tambah" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>
                                @include('admin.modal.modal_tambah_guru')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($data_guru as $guru)
                        @include('admin.content_dashboard.account_guru')
			            @include('admin.modal.modal_edit_guru')
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
