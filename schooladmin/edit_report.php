<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Report</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="report_list.php">Report/</a></li>
<li class="breadcrumb-item active">Edit Report</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject ID <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject Name <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Report</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>