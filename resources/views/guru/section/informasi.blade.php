<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><i class="fas fa-bullhorn"></i> Pengumuman Penting</h4>
            <div class="card-tools">
                <a onclick="pengumuman()" href="#" class="btn btn-primary btn-sm">
                    <i class="fa fa-retweet" aria-hidden="true"></i>
                    Refresh
                </a>
                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Buat Pengumuman
                </a>
                @include("kepala_sekolah.modal.modal_informasi")
                <!-- /.modal -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div style="overflow-y: auto; height:290px;" class="card-body">
            <div id="message">
                <div id="tl" class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">Pengumuman Terbaru</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->

                    <div>
                        <i class="fas fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i></span>
                            <h3 class="timeline-header"><a href="#">Administrator</a> pesan penting</h3>
                            <div class="timeline-body">
                            </div>
                            <div class="timeline-footer">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <label>For Everyone</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
