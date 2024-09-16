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
<h3 class="page-title">Edit Class</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="departments.php">Class/</a></li>
<li class="breadcrumb-item active">Edit Class</li>
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
<h5 class="form-title"><span>Class Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Department ID <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="PRE1534">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Department Name <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="MCA">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Head of Department <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="Lois A">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Department Start Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>No of Students <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="200">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
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

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>