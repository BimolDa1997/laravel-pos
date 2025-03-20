<?php
 $manu ='';
 $sub_manu = 'home';
 $page = 'Dashbord Pages';
include('./assets/template/header.php');

?>





<div class="row">
    <div class="col-sm-4 p-0 ps-1 pe-1">
            
        <div class="card dash-tiem">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-create mt-3 mb-2 text-muted"><i class="fa-duotone fa-gear"></i></h6>
                        <p class="card-link m-0">Create item</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="card dash-tiem">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-total-title  mt-3 mb-0  text-muted">6</h6>
                        <p class="card-link m-0">Total PO's</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="card dash-tiem">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-report mt-3 mb-2 text-muted"><i class="fa-thin fa-files"></i></h6>
                        <p class="card-link m-0">GRN Report</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="card  dash-tiem-with">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-subtitle mt-3 mb-2 text-muted"><i class="fa-thin fa-address-card"></i></h6>
                        <p class="card-link m-0">Create Customers</p>
                    </div>
                </div>
            </a>
        </div>


        <div class="card dash-tiem">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-total-title  mt-3 mb-0  text-muted">6</h6>
                        <p class="card-link m-0">Total Customers</p>
                    </div>
                </div>
            </a>
        </div>


        
        <div class="card  dash-tiem-with">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-subtitle mt-3 mb-2 text-muted"><i class="fa-thin fa-shop"></i></h6>
                        <p class="card-link m-0">Create Supplier</p>
                    </div>
                </div>
            </a>
        </div>


        <div class="card dash-tiem">
            <a href="#">
                <div class="card-body p-1 d-flex justify-content-center  align-items-center">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="text-center">
                        <h6 class="card-total-title  mt-3 mb-0  text-muted">6</h6>
                        <p class="card-link m-0">Total Suppliers</p>
                    </div>
                </div>
            </a>
        </div>




    </div>

    <div class="col-sm-4  p-0 ps-1 pe-1">
        <div class="card card-chart">
                <div class="card-body p-1">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="all-chart">
                        <p class="card-link m-0">Work Order Status</p>

                        
                        <canvas id="halfDonutChart" class="all_chartjs" height="285"></canvas>
                    </div>
                </div>
        </div>
    </div>

    <div class="col-sm-4  p-0 ps-1 pe-1">
        <div class="card card-chart">
                <div class="card-body p-1">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="all-chart">
                        <p class="card-link m-0">Category Wise item Details</p>

                        <canvas id="DoughnutChart" class="all_chartjs" height="285"></canvas>

                
                    </div>
                </div>
        </div>
    </div>

</div>










<div class="row">

    <div class="col-sm-4  p-0 ps-1 pe-1">
    <div class="card card-chart">
                <div class="card-body p-1">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="all-chart">
                        <p class="card-link m-0"> Status wise total PO Quantity</p>
                        <canvas id="pieChart" class="all_chartjs" height="285"></canvas>
                
                    </div>
                </div>
        </div>
    </div>

    <div class="col-sm-8  p-0 ps-1 pe-1">
        <div class="card card-chart">
                <div class="card-body p-1">
                    <div class="side-icon"><i class="fa-duotone fa-link"></i></div>
                    <div class="all-chart">
                        <p class="card-link m-0">Status wise Quantity of Each BOM</p>

                        <canvas id="barChart" class="all_chartjs" height="285"></canvas>
                
                    </div>
                </div>
        </div>
    </div>

</div>











<?php include('./assets/template/footer.php')?>

<!-- Half-Donut Chart  start  -->
<script>    
const circumference = 180; // deg

const data = {
  labels: ["Green", "Black"],
  datasets: [
    {
      label: "My First Dataset",
      data: [300, 200],
      backgroundColor: [
        "#404042",
        "#01bdae"
        
      ]
    }
  ]
};

const config = {
  type: "doughnut",
  data: data,
  options: {   
    responsive: true,
    maintainAspectRatio: true,
    rotation: (-circumference / 2),
    circumference: circumference,
    cutout: 90,
    borderWidth: 0,
    plugins: {
      title: false,
      subtitle: false,
      legend: false
    },
  }
};

const myChart = new Chart("halfDonutChart", config);
</script>
<!-- Half-Donut Chart end -->


<!-- Doughnut Charts start -->
<script>
        // Doughnut Chart
        var ctxDoughnut = document.getElementById("DoughnutChart").getContext('2d');
        var doughnutChart = new Chart(ctxDoughnut, {
            type: 'doughnut',
            data: {
                labels: ["Item 1", "Item 2", "Item 3", "Item 4"],
                datasets: [{
                    data: [500, 500, 500, 500], // Specify the data values array
                    borderColor: ['#01bdae', '#404042', '#357bd1', '#e66490'], // Add custom color border 
                    backgroundColor: ['#01bdae', '#404042', '#357bd1', '#e66490'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]
            },
            options: {
                responsive: false, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });

</script>
<!-- Doughnut Charts end -->

<!-- Pie Charts start -->
<script>
        var oilCanvas = document.getElementById("pieChart").getContext('2d');
        var oilData = {
            labels: [
                "Item 1",
                "Item 2"
            ],
            datasets: [{
                data: [133.3, 986.2],
                backgroundColor: [
                    "#01bdae",
                    "#404042"
                ]
            }]
        };

        var oilPieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData,
            options: {
                responsive: false,
                maintainAspectRatio: false,
            }
        });
</script>
<!-- Pie Charts end -->

<!-- barChart start -->
<script>
    var ctx = document.getElementById("barChart").getContext('2d');
    var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sst", "Sun"],
        datasets: [{
        label: 'data-1',
        data: [12, 19, 3, 17, 28, 24, 7],
        backgroundColor: "#01bdae"
        }, {
        label: 'data-2',
        data: [30, 29, 5, 5, 20, 3, 10],
        backgroundColor: "#404042"
        }]
    }
    });
</script>
<!-- barChart end -->