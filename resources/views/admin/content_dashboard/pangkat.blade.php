<section class="col-lg-6 connectedSortable">
  <div class="card card-outline card-success">
    <div class="card-header" style="height: 55px">
      <div class="row">
        <div class="col-md-11">
          <h5 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Data Pangkat</h5>
        </div>
        <div class="col-md-1">
          <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-kepangkatan"><i class="fa fa-plus"></i></button>
            @include('admin.modal.modal_tambah_kepangkatan')
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
        @php $no = 1 @endphp
        @foreach($kepangkatan as $pangkat)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pangkat->kode_pangkat }}</td>
                <td>{{ $pangkat->pangkat }}</td>
                <td>
                    <a class="btn btn-sm btn-danger" href="/hapuspangkat/{{$pangkat->kode_pangkat}}"><i class="fa fa-trash"></i></a>&nbsp;
                    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit-pangkat{{$pangkat->kode_pangkat}}"><i class="fa fa-edit"></i></button>
                </td>
                @include('admin.modal.modal_edit_kepangkatan')
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
