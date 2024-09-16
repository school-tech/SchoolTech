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
<h3 class="page-title">Exam</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Exam</li>
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
<h3 class="page-title">Exam</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="add_exam.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="card-body">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item"><a class="nav-link active" href="#bottom-justified-tab1" data-bs-toggle="tab">Science</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab2" data-bs-toggle="tab">Commercial</a></li>
<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab3" data-bs-toggle="tab">Arts</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="bottom-justified-tab1">

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
SSS 1 Science<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseOne" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseSix">
SSS 2 Science<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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


<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
SSS 3 Science<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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
<div class="tab-pane" id="bottom-justified-tab2">

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
SSS 1 Commercial<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseSix">
SSS 2 Commercial<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseFive" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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


<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseOne">
SSS 3 Commercial<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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
<div class="tab-pane" id="bottom-justified-tab3">

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseOne">
SSS 1 Arts<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseSeven" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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

<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseSix">
SSS 2 Arts<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseEight" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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


<div class="card mb-1">
<div class="card-header border-0" id="headingSix">
<h5 class="accordion-faq m-0 position-relative">
<a class="custom-accordion-title btn-primary text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseOne">
SSS 3 Arts<i class="mdi mdi-chevron-down accordion-arrow"></i>
</a>
</h5>
</div>
<div id="collapseNine" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Timetable</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-books.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Name</th>
<th>Language</th>
<th>Department</th>
<th>Class</th>
<th>Type</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>PRE2309</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2209</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>Geometry</td>
<td>Science</td>
<td>8</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2213</td>
<td>
<h2>
<a>Games</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2143</td>
<td>
<h2>
<a>Chess</a>
</h2>
</td>
<td>English</td>
<td>General</td>
<td>7</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2009</td>
<td>
<h2>
<a>Calculus</a>
</h2>
</td>
<td>English</td>
<td>Mathematics</td>
<td>9</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2431</td>
<td>
<h2>
<a>Visual Basic</a>
</h2>
</td>
<td>English</td>
<td>Computer Science</td>
<td>11</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE1534</td>
<td>
<h2>
<a>Acoustics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-success">In Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<tr>
<td>PRE2153</td>
<td>
<h2>
<a>Robotics</a>
</h2>
</td>
<td>English</td>
<td>Science</td>
<td>10</td>
<td>Book</td>
<td>
<span class="badge badge-danger">Out of Stock</span>
</td>
<td class="text-end">
<div class="actions">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-books.html" class="btn btn-sm bg-danger-light">
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
</div>
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

<!-- Mirrored from preschool.dreamguystech.com/template/exam.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:48 GMT -->
</html>