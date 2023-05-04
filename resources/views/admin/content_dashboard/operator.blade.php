<div class="col-md-4">
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{asset('foto/profile/1.png')}}" width="50px" height="50px" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{ auth()->guard('operator')->user()->nama }}</h3>
            <p class="text-muted text-center">Operator Sekolah</p>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>NIP</b> <a class="float-right">{{ auth()->guard('operator')->user()->NIP }}</a>
                </li>
                <li class="list-group-item">
                    <b>Nama User</b> <a class="float-right">{{auth()->guard('operator')->user()->nama}}</a>
                </li>
                <li class="list-group-item">
                    <b>Username</b> <a class="float-right">{{ auth()->guard('operator')->user()->username }}</a>
                </li>
            </ul>
        </div>

      </div>
</div>
