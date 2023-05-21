<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
    <div class="card bg-purple border-20 d-flex flex-fill">
        <div class="card-header text-muted text-white border-bottom-0">
            Akun Kepala Sekolah
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                    <h2 class="lead"><b>{{ $guru->nama }}</b></h2>
                    <p class="text-muted text-white text-sm"><b>NIP: {{ $guru->NIP }}</b></p>
                    <p class="text-muted text-white text-sm"><b>Status: <span class="badge badge-info">Kepala Sekolah</span></b></p>
                    <ul class="ml-4 mb-0 fa-ul text-white text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> {{ $guru->username }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span> {{ $guru->last_access }}</li>
                    </ul>
                </div>
                <div class="col-5 text-center">
                    <img src="{{asset('foto/profile/5.png')}}" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="#" class="btn btn-sm btn-outline-warning"  data-target="#modal-guru-edit{{ $guru->NIP }}" data-toggle="modal">
                    <i class="fas fa-edit"></i> Edit Akun
                </a>
                <a href="/hapuskepalasekolah/{{ $guru->NIP }}" class="btn btn-sm btn-outline-danger">
                    <i class="fas fa-trash"></i> Hapus Akun
                </a>
            </div>
        </div>
    </div>
</div>
