<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Welcome Mr <?php echo $row['adminname']  ?></h3>

</div>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Students</h6><?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
                        $query = "SELECT * FROM student WHERE school_id = $school_id";
                        $data = mysqli_query($sql_con, $query);
                        $row = mysqli_num_rows($data);
                        ?><h2><b>
                        <?php echo $row?></b></h2>
</div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Teachers</h6>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
                        $query = "SELECT * FROM teacher WHERE school_id = $school_id";
                        $data = mysqli_query($sql_con, $query);
                        $row = mysqli_num_rows($data);
                        ?><h2><b>
                        <?php echo $row?></b></h2></div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Classes</h6>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
                        $query = "SELECT * FROM class WHERE school_id = $school_id";
                        $data = mysqli_query($sql_con, $query);
                        $row = mysqli_num_rows($data);
                        ?><h2><b>
                        <?php echo $row?></b></h2>
</div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-comman w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-info">
<h6>Report</h6>

<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
                        $query = "SELECT * FROM report WHERE school_id = $school_id";
                        $data = mysqli_query($sql_con, $query);
                        $row = mysqli_num_rows($data);
                        ?><h2><b>
                        <?php echo $row?></b></h2></div>
<div class="db-icon">
<img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Overview</h5>
</div>
<div class="col-6">
<ul class="chart-list-out">
<li><span class="circle-blue"></span>Teacher</li>
<li><span class="circle-green"></span>Student</li>
<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="apexcharts-area"></div>
</div>
</div>

</div>
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Number of Students</h5>
</div>
<div class="col-6">
<ul class="chart-list-out">
<li><span class="circle-blue"></span>Girls</li>
<li><span class="circle-green"></span>Boys</li>
<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="bar"></div>
</div>
</div>

</div>
</div>




</div>

<footer>
<p>Copyright © 2022 SchoolTech.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:46 GMT -->
</html>