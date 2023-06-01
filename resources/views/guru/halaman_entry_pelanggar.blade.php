<div class="modal fade" id="modal-entry-pelanggaran">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Entry Pelanggaran Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/tambahmpk">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pilih Semester</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="semester" id="semester">
                                        <option value="">Pilih Semester</option>
                                        @foreach($data_semester as $sm)
                                            <option value="{{ $sm->semester }}">Semester {{ $sm->semester }}</option>
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
                                    <input type="number" placeholder="Masukan tahun aktif" class="form-control" name="tahun_periode_aktif" id="tahun_aktif" >
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
                                    <input type="number" placeholder="Masukan tahun tidak aktif" class="form-control" name="tahun_periode_non" id="tahun_aktif" >
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-plus"></i> Tambah MPK</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
