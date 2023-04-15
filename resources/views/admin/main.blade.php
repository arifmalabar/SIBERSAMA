<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>34</h3>

              <p>Jumlah Akun Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-card"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>35</h3>
              <p>Jumlah Jurusan</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>35</h3>
                <p>Jumlah Kelas</p>
              </div>
              <div class="icon">
                <i class="fa fa-school"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
      <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
              <h4 class="card-title"><i class="fas fa-school"></i>&nbsp; Biodata Sekolah</h4>
                <div class="card-tools"></div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div style="overflow-y: auto; height:290px;" class="card-body">
                <ul>
                    <li>NPSN     : 2118055</li>
                    <li>Status   : Rahasia</li>
                    <li>Kecamatan: Blimbing</li>
                    <li>Kelurahan: Arjosari</li>
                    <li>Kota/Kab : Malang</li>
                    <li>Provinsi : Jawa Timur</li>
                </ul>
                <hr>
                <ul>
                    <li>Kepala Sekolah : <b>Ridho Arif W</b></li>
                    <li>Operator : <b>Ridho Arif W</b></li>
                    <li>Username : <b>k422323@sch.id</b></li>
                    <li>Status   : <b><span class="right badge badge-success">Aktif</span></b></li>
                </ul>
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-lg-4">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-users"></i> Last Access</h3>
                <div class="card-tools">
                  <div class="row">
                    <div class="col-lg-12">
                      <a href="#" class="btn btn-primary btn-sm">
                        <i class="fa fa-retweet"></i>
                        Refresh
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div style="overflow-y: auto; height:290px;" class="card-body">
                <div class="row">
                  <div style="margin-bottom: 10px" class="col-lg-12">
                    <div class="row">         
                        <div class="col-lg-2">
                          <img src="{{asset('foto/profile/3.png')}}" style="border-radius: 50%" width="50px" height="50px" alt="">
                        </div>
                        <div class="col-lg-10">
                            &nbsp;&nbsp;&nbsp;<a href="">Ridho Arif Wicaksono</a>&nbsp;
                            <div class="col-lg-8">
                              <small class="time"><i class="fas fa-clock"></i> 09/03/2023</small>
                            </div>
                        </div>               
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title"><i class="fa fa-signal" aria-hidden="true"></i> Presentase Guru Aktif</h5>
            </div>
            <div class="card-body">
              <canvas id="donutChart" style="min-height: 230px; height: 230px; max-height: 230px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body-->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Akun Guru</span>
                <span class="info-box-number">12</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="info-box mb-3 bg-purple">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Akun Guru Valid/Aktif</span>
                <span class="info-box-number">12</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Akun Guru Belum Aktif/Valid</span>
                <span class="info-box-number">12</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
        </div>
      </div>
      
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-6 connectedSortable">
          <div class="card card-outline card-success">
            <div class="card-header" style="height: 55px">
              <h5 class="card-title"><i class="fa fa-university" aria-hidden="true"></i> Manajemen Kelas</h5>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Kelas</th>
                  <th>Kelas</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section class="col-lg-6 connectedSortable">
          <div class="card card-outline card-info">
            <div class="card-header">
              <div class="row">
                <div class="col-md-11">
                  <h5 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> Token</h5>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-token"><i class="fa fa-plus"></i></button>
                  <div class="modal fade" id="modal-token">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Tambah Sesi</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form role="form" method="post" action="admin/dashboard/tambahtoken">
                            <div class="row">
                               <div class="col-md-12">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Pilih Sesi</label>
                                  <select name="sesi" class="form-control select2bs4">
                                     <option value="">--Sesi--</option>
                                  </select>
                                </div>
                              </div>
                              
                            </div>
                            
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Tambah Token</button>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Mata pelajaran</th>
                    <th>Kode Token</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->