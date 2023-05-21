<div class="modal fade" id="modal-guru-edit{{ $guru->NIP }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Edit Kepala Sekolah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/editkepalasekolah/{{ $guru->NIP }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>NIP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $guru->NIP }}" placeholder="Masukan NIP Guru" required name="NIP" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $guru->nama }}" placeholder="Masukan Nama Guru" required name="nama" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    </div>
                                    <input type="email" value="{{ $guru->username }}" placeholder="Masukan Username" required name="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    </div>
                                    <input type="password" placeholder="Masukan password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{ $guru->password }}" placeholder="Masukan password" name="old_password" class="form-control">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jabatan Guru</label>
                                <select class="form-control select2bs4" name="kd_jabatan" data-placeholder="Pilih Jbatan Guru" style="width: 100%;">
                                    <option value="">Pilih Jabatan</option>
                                    @foreach($data_jabatan as $s)
                                        @if($s->kd_jabatan == $guru->kd_jabatan)
                                            <option selected value="{{ $s->kd_jabatan }}">{{ $s->nama_jabatan }}</option>
                                        @else
                                            <option value="{{ $s->kd_jabatan }}">{{ $s->nama_jabatan }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pangkat Guru</label>
                                <select class="form-control select2bs4" name="kode_pangkat" data-placeholder="Pilih Pangkat Guru" style="width: 100%;">
                                    <option value="">Pilih Jabatan</option>
                                    @foreach($data_pangkat as $pangkat)
                                        @if($pangkat->kode_pangkat == $guru->kode_pangkat)
                                            <option selected value="{{ $pangkat->kode_pangkat }}">{{ $pangkat->pangkat }}</option>
                                        @else
                                            <option value="{{ $pangkat->kode_pangkat }}">{{ $pangkat->pangkat }}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i> Edit Kepala Sekolah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
