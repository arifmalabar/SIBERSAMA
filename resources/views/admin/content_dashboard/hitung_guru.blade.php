<div class="col-md-8">
    <div class="col-md-12">
      <div class="info-box mb-3 bg-success">
        <span class="info-box-icon"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Jumlah Akun Guru</span>
          <span class="info-box-number">{{ $count_guru }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-12">
      <div class="info-box mb-3 bg-purple">
        <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Data Pangkat</span>
          <span class="info-box-number">{{ count($kepangkatan) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-12">
      <div class="info-box mb-3 bg-danger">
        <span class="info-box-icon"><i class="fas fa-star"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Data Jabatan</span>
          <span class="info-box-number">{{ $count_jabatan }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-md-12">
        <div class="info-box mb-3 bg-warning">
          <span class="info-box-icon"><i class="fa fa-bar-chart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Data</span>
            <span class="info-box-number">{{ $jumlah }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
  </div>
