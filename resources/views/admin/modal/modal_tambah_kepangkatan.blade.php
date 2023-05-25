<div class="modal fade" id="modal-kepangkatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Kepangkatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/tambahpangkat">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Pangkat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="" placeholder="Masukan Nama Jabatan" name="pangkat" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Tambah Pangkat</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
