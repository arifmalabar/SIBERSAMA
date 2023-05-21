<section class="col-lg-6 connectedSortable">
    <div class="card card-outline card-info">
      <div class="card-header">
        <div class="row">
          <div class="col-md-11">
            <h5 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> Data Jabatan</h5>
          </div>
          <div class="col-md-1">
            <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-jabatan"><i class="fa fa-plus"></i></button>
            @include('admin/modal/modal_jabatan')
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
                        <a class="btn btn-sm btn-danger" href="/hapusjabatan/{{$key->kd_jabatan}}"><i class="fa fa-trash"></i></a>&nbsp;
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit-jabatan{{ $key->kd_jabatan }}"><i class="fa fa-edit"></i></button>
                    </td>
                </tr>
                @include('admin.modal.modal_edit_jabatan')
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </section>
