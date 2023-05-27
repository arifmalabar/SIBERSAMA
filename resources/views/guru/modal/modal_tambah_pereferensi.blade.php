<div class="modal fade" id="modal-pereferensi-tambah">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Tambah Pereferensi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/tambahpereferensi">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Keterangan Pereferensi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <input type="text" placeholder="Masukan Keterangan Pereferensi" name="keterangan" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Bobot</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <input type="text" placeholder="Masukan Bobot" name="bobot_nilai" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Tambah Pereferensi</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
