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
<h3 class="page-title">Fees</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Fees</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Fees</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Fees Name</th>
<th>Class</th>
<th>Amount</th>
<th>Start Date</th>
<th>End Date</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Exam Fees</a>
</h2>
</td>
<td>10</td>
<td>$345</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Exam Fees</a>
</h2>
</td>
<td>1</td>
<td>$255</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Exam Fees</a>
</h2>
</td>
<td>9</td>
<td>$545</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Sports Day Fees</a>
</h2>
</td>
<td>8</td>
<td>$234</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Exam Fees</a>
</h2>
</td>
<td>7</td>
<td>$265</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Sports Day Fees</a>
</h2>
</td>
<td>2</td>
<td>$334</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1434</td>
<td>
<h2>
<a>Sports Day Fees</a>
</h2>
</td>
<td>6</td>
<td>$341</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2345</td>
<td>
<h2>
<a>Exam Fees</a>
</h2>
</td>
<td>12</td>
<td>$365</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2365</td>
<td>
<h2>
<a>Annual Day Fees</a>
</h2>
</td>
<td>11</td>
<td>$83</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1234</td>
<td>
<h2>
<a>Class Test Fees</a>
</h2>
</td>
<td>5</td>
<td>$242</td>
<td>23 Apr 2020</td>
<td>28 Apr 2020</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-fees.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
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

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/fees.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:48 GMT -->
</html>