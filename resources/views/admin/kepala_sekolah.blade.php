@extends("admin.template.main")
@section("content")
    @include("admin.content_dashboard.header")
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('template_error.message_request_error')
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" value="" placeholder="Masukan Nama Jabatan" name="nama_jabatan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <button class="btn btn-info" data-target="#modal-jurusan-tambah" data-toggle="modal">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                                <div class="col-lg-2">
                                    &nbsp;
                                    <button class="btn btn-success" data-target="#modal-guru-tambah" data-toggle="modal">
                                        <i class="fa fa-plus"></i> Tambah
                                    </button>
                                    @include('admin.modal.modal_tambah_kepsek')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($data_kepsek as $guru)
                            @include('admin.content_dashboard.account_kepsek')
                            @include('admin.modal.modal_edit_kepsek')
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
