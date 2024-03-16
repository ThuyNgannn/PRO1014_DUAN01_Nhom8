<div class="container-fluid px-4 bg-dark">
    <h1 class="mt-4 text-white" style=" background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;">TRANG CHÍNH  </h1>
      
    <br>
    
    <div class="row">
        
        <div class="col-xl-6 col-md-6">
            
            <div class="card bg-primary text-white mb-4">
                <div class="card-body text-center">LOẠI HÀNG <i class='fas fa-boxes' style='font-size:50px;color:wheat'></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="card-body text-center text-white " href="<?= $ADMIN_URL ?>/loai-hang/"></a>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body text-center">KHÁCH HÀNG <i class='fas fa-grin-alt' style='font-size:50px;color:wheat'></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?= $ADMIN_URL ?>/khach-hang/">chi tiết...</a>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body text-center">THƯƠNG HIỆU <i class='	fab fa-itunes-note' style='font-size:50px;color:wheat'></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?= $ADMIN_URL ?>/thuong-hieu/">chi tiết...</a>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body text-center">SẢN PHẨM <i class='fas fa-socks' style='font-size:50px;color:wheat'></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?= $ADMIN_URL ?>/san-pham/">chi tiết...</a>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                   THỐNG KÊ BÁN HÀNG
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    THỐNG KÊ SẢN PHẨM
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>

</div>
</div>