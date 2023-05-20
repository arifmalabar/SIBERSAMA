<div class="modal fade" id="modal-update-siswa{{ $siswa->NISN }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Update Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/editsiswa/{{ $id }}/{{ $siswa->NISN }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>NISN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $siswa->NISN }}" placeholder="Masukan NISN" name="nisn" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="{{ $siswa->nama_siswa }}" placeholder="Masukan Nama Siswa" name="nama_siswa" class="form-control">
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
                                    <input type="text" value="{{ $siswa->username }}" placeholder="Masukan Username" name="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    </div>
                                    <input type="text" value="" placeholder="Masukan Password" name="password" class="form-control">
                                    <input type="hidden" value="{{ $siswa->password }}" placeholder="Masukan Password" name="old_password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pindah Kelas</label>
                                <select class="form-control select2bs4" name="kode_kelas" style="width: 100%">
                                    @foreach($data_kelas as $kelas)
                                        @if($kelas->kode_kelas == $siswa->kode_kelas)
                                            <option selected value="{{ $kelas->kode_kelas }}">{{ $kelas->nama_kelas }}</option>
                                        @else
                                            <option value="{{ $kelas->kode_kelas }}">{{ $kelas->nama_kelas }}</span> </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-baby"></i>
                                        </span>
                                    </div>
                                    <select class="form-control" name="jenis_kelamin">
                                        @if($siswa->jenis_kelamin == "pria")
                                            <option selected value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        @else
                                            <option value="wanita">Wanita</option>
                                            <option selected value="wanita">Wanita</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-user-edit"></i> Update Siswa</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
