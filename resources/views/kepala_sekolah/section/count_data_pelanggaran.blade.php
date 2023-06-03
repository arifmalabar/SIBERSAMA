<div class="col-md-6">
    <div class="col-md-12">
        <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Jumlah Pelanggaran Tinkat Rendah</span>
                <span class="info-box-number">{{ $dashboard_controller->getPelanggaranRendah() }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-12">
        <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Jumlah Pelanggaran Tingkat Sedang</span>
                <span class="info-box-number">{{ $dashboard_controller->getPelanggaranSedang() }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-12">
        <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Jumlah Pelanggaran Tingkat Tinggi</span>
                <span class="info-box-number">{{ $dashboard_controller->getPelanggaranTingkatTinggi() }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>
