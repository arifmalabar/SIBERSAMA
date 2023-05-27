<div class="modal fade" id="modal-jeniskriteria-update{{ $jk->kode_jenis_kriteria }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Update jenis Kriteria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/editjeniskriteria/{{ $jk->kode_jenis_kriteria }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jenis Kriteria</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $jk->jenis_kriteria }}" placeholder="Masukan Jenis Kriteria" name="jenis_kriteria" class="form-control">
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
                                    <input type="text" value="{{ $jk->bobot_poin }}" placeholder="Masukan Bobot Kriteria" name="bobot_poin" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pilih Kriteria</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="kode_kriteria">
                                        @foreach($kriteria as $kt)
                                            <option {{ ($kt->kode_kriteria == $jk->kode_kriteria) }} ? 'selected':'' }} value="{{ $kt->kode_kriteria }}">{{ $kt->nama_kriteria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i> Update Kriteria</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
