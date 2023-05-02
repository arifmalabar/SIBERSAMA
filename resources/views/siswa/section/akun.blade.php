<div class="col-md-4">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-user"></i> Akun Anda</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{asset('foto/profile/3.png')}}" width="50px" height="50px" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{ session()->get('nama') }}</h3>
            <p class="text-muted text-center">Siswa</p>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>NISN</b> <a class="float-right">{{ session()->get('NIP') }}</a>
                </li>
                <li class="list-group-item">
                    <b>Nama User</b> <a class="float-right">{{ session()->get('nama') }}</a>
                </li>
                <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right"><span class="badge badge-danger">{{ session()->get('nama_kelas') }}</span></a>
                </li>
                <li class="list-group-item">
                    <b>Jurusan</b> <a class="float-right"><span class="badge badge-success">{{ session()->get('nama_jurusan') }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>