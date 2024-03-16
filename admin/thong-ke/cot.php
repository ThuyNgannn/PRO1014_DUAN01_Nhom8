<div class="container">
    <div class="cards row mt-5">
        <div class="card-single col d-flex justify-content-around bg-success text-white py-5 ml-3">
            <div>
                <h1 class="font-weight-bold"><?= $san_pham ?></h1>
                <span>Danh mục</span>
            </div>
            <div>
                <i class="fas fa-th-list" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ml-3">
            <div>
                <h1 class="font-weight-bold"><?= $hang_hoa ?></h1>
                <span>Sản phẩm</span>
            </div>
            <div>
                <i class="fas fa-sitemap" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ml-3">
            <div>
                <h1 class="font-weight-bold"><?= $khach_hang ?></h1>
                <span>Khách hàng</span>
            </div>
            <div>
                <i class="fas fa-users" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-primary text-white py-5 ml-3">
            <div>
                <h1 class="font-weight-bold"><?= $binh_luan ?></h1>
                <span>Bình luận</span>
            </div>
            <div>
                <i class="fas fa-comments" style="font-size: 80px;"></i>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="container">
    <canvas id="myChart"></canvas>
</div>

<script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['loại hàng ', 'số lượng'],
        datasets:[{
          label:'TỔNG SỐ',
          data:[
            <?= $loai_hang ?>,
            <?= $so_luong ?>,
            
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:4,
          hoverBorderColor:'#ffff'
        }]
      },
      options:{
        title:{
          display:true,
          text:'BẢNG THỐNG KÊ',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
      
    });
  </script>
  <style>
    container {
      background: #2f4f4f;
    }
  </style>
