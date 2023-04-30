<section class="col-lg-6 connectedSortable">
  <div class="card card-outline card-success">
    <div class="card-header" style="height: 55px">
      <div class="row">
        <div class="col-md-11">
          <h5 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Data Pangkat</h5>
        </div>
        <div class="col-md-1">
          <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-token"><i class="fa fa-plus"></i></button>
          <div class="modal fade" id="modal-token">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-info">
                  <h4 class="modal-title">Tambah Pangkat</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form role="form" method="post" action="/tambahJabatan">
                      @csrf
                    <div class="row">
                       <div class="col-md-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Pangkat</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="fa fa-graduation-cap"></i>
                                  </span>
                              </div>
                              <input type="text" placeholder="Masukan Nama Pangkat" name="nama_pangkat" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">X Close</button>
                  <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Tambah Jabatan</button>
                </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
      </div>
    </div>
    <div class="card-body tb-pangkat" style="overflow: scroll;">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Kode Pangkat</th>
          <th>Nama Pangkat</th>
          <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</section>