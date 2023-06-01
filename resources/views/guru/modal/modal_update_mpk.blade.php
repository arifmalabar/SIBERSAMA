<div class="modal fade" id="modal-mpk-update{{ $mpk->kode_anggota }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Update MPK</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/editmpk/{{ $mpk->kode_anggota }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pilih Siswa</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="NISN" id="nisn">
                                        <option value="">Pilih Data</option>
                                        @foreach($data_siswa as $sis)
                                            <option {{ ($sis->NISN == $mpk->NISN) ? "selected" : "" }} value="{{ $sis->NISN }}">{{ $sis->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tahun Aktif</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-users"></i>
                                        </span>
                                    </div>
                                    <input type="number" value="{{ $mpk->tahun_periode_aktif }}" placeholder="Masukan tahun aktif" class="form-control" name="tahun_periode_aktif" id="tahun_aktif" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Nonaktif</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-users"></i>
                                        </span>
                                    </div>
                                    <input type="number" value="{{ $mpk->tahun_periode_non }}" placeholder="Masukan tahun tidak aktif" class="form-control" name="tahun_periode_non" id="tahun_aktif" >
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-save"></i> Update MPK</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
