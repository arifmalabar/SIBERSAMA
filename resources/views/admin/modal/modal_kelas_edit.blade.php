<div class="modal fade" id="modal-jurusan-update{{ $kelas->kode_kelas }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Update Kelas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/updatekelas/{{ $kelas->kode_kelas }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $kelas->nama_kelas }}" placeholder="Masukan Nama Jurusan" name="nama_kelas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <select class="form-control select2bs4" name="kode_jurusan" style="width: 100%;">
                                    @foreach($data_jurusan as $jurusan)
                                        <option value="{{ $jurusan->kode_jurusan }}" selected="{{ $jurusan->kode_jurusan == $kelas->jurusan->kode_jurusan ? "selected" : "" }}">{{ $jurusan->nama_jurusan }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">X Close</button>
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-plus"></i> Update Kelas</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
