<div class="row mb-3">
     <div class="col">
          <?php //echo message("info","Masih Dalam Pengembangan ya !!") ?>
     </div>
</div>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-info">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Orders</p>
                              <h4 class="my-1 text-info">0</h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                              <i class="bx bxs-cart"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Uang Masuk</p>
                              <h4 class="my-1 text-danger">0</h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                              <i class="bx bxs-wallet"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-success">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Uang Keluar</p>
                              <h4 class="my-1 text-success">
                                   <?php 
                                   $total = $this->db->query("SELECT sum(jumlah) as total from kas_keluar ")->row()->total;
                                   echo number_format($total,0,',','.');
                                    ?>
                              </h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                              <i class="bx bxs-bar-chart-alt-2"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-warning">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Member</p>
                              <h4 class="my-1 text-warning">
                                   <?php 
                                   echo $this->db->get('member')->num_rows();
                                    ?>
                              </h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                              <i class="bx bxs-group"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--end row-->

<div class="row">
    <div class="col-12 col-lg-12">
       <div class="card radius-10">
                 <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <h6 class="mb-0">Grafik Order Produk</h6>
                         </div>
                         <div class="dropdown ms-auto">
                              <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="javascript:;">Action</a>
                                   </li>
                                   <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                   </li>
                                   <li>
                                        <hr class="dropdown-divider">
                                   </li>
                                   <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                         <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Sales</span>
                         <!-- <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Visits</span> -->
                    </div>
                    <div class="chart-container-1">
                         <canvas id="chart1"></canvas>
                      </div>
                 </div>
            </div>
        </div>
     </div><!--end row-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>

<script type="text/javascript">
     $(function() {
    "use strict";

     
// chart 1

  var ctx = document.getElementById("chart1").getContext('2d');
   
  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke1.addColorStop(0, '#6078ea');  
      gradientStroke1.addColorStop(1, '#17c5ea'); 
   
  var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke2.addColorStop(0, '#ff8359');
      gradientStroke2.addColorStop(1, '#ffdf40');

      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Total Pembelian',
            data: [65, 59, 80, 81,65, 59, 80, 81,59, 80, 81,65],
            borderColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            hoverBackgroundColor: gradientStroke1,
            pointRadius: 0,
            fill: false,
            borderWidth: 0
          }]
        },
          
          options:{
            maintainAspectRatio: false,
            legend: {
                 position: 'bottom',
              display: false,
                 labels: {
                boxWidth:8
              }
            },
               tooltips: {
                 displayColors:false,
               },   
            scales: {
                 xAxes: [{
                    barPercentage: .5
                 }]
               }
          }
      });


   });     
   
</script>


