<div class="modal fade" id="modal-entry-pelanggaran{{ $siswa->NISN }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Entry Pelanggaran Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/tambahpelanggaran/{{ $id }}">
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
                                    <input type="hidden" value="{{ $siswa->NISN }}" name="NISN">
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="semester" id="semester">
                                        <option value="">Pilih Semester</option>
                                        @foreach($data_semester as $sm)
                                            <option value="{{ $sm->semester }}">Semester {{ $sm->semester }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pilih Kriteria Pelanggaran</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    </div>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="kode_jenis_kriteria" id="semester">
                                        <option value="">Pilih Kriteria Pelanggaran</option>
                                        @foreach($data_kriteria as $k)
                                            <optgroup label="{{ $k->nama_kriteria }}">
                                                @foreach($k->jenisk as $jk)
                                                    <option value="{{ $jk->kode_jenis_kriteria }}">{{ $jk->jenis_kriteria }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
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
