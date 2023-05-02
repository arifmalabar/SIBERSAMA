<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sorting Pelangaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <select class="select2" multiple="multiple" data-placeholder="Pilih Jenis Pelanggaan" style="width: 100%;">
                            <option>Kerapian</option>
                            <option>Kelakuan</option>
                            <option>Atribut</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="card-title"><i class="fa fa-calendar"></i> Waktu Dan Tanggal</h4>
                </div>
                <br>
                <br>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" placeholder="Tanggal" name="nama_jabatan" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select class="select2" multiple="multiple" data-placeholder="Pilih Jenis Pelanggaan" style="width: 100%;">
                            <option>Kerapian</option>
                            <option>Kelakuan</option>
                            <option>Atribut</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" placeholder="Tanggal" name="nama_jabatan" class="form-control">
                    </div>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">X Batal</button>
          <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-search"></i> Sorting</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->