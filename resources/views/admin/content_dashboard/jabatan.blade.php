<section class="col-lg-6 connectedSortable">
    <div class="card card-outline card-info">
      <div class="card-header">
        <div class="row">
          <div class="col-md-11">
            <h5 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> Data Jabatan</h5>
          </div>
          <div class="col-md-1">
            <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-token"><i class="fa fa-plus"></i></button>
            <div class="modal fade" id="modal-token">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Jabatan</h4>
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
                            <label>Nama Jabatan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Masukan Nama Jabatan" name="nama_jabatan" class="form-control">
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
      <div class="card-body tb_jabatan" style="overflow: scroll">
        <table id="example3" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Jabatan</th>
                <th>Nama Jabatan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($jabatan as $key)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $key->kd_jabatan }}</td>
                    <td>{{ $key->nama_jabatan }}</td>
                    <td>
                        <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>&nbsp;
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </section>