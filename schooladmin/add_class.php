<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
 $schoolid = $row['school_id'];
 $school_name = $row['schoolname'];



if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $school_name;
    $classname = $_POST['classname'];
    $department = $_POST['department'];
    $location = $_POST['location'];
    $level = $_POST['level'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
  
  
  
    $data = mysqli_query($sql_con, "INSERT INTO class(school_id, schoolname, classname, department, level, location, date, month, year) 
    VALUES ('$school_id','$schoolname','$classname','$department','$level','$location','$date','$month','$year')");
    if ($data) {
      echo"<script>alert('Class Added Successfully!!')</script>";
      echo"<script>window.location='class.php';</script>";
      } else {
      echo "Failed:" . mysqli_error($sql_con);
    }
  }

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add class</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="departments.php">Class/</a></li>
<li class="breadcrumb-item active">Add Class</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form method="post">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Class Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class Name <span class="login-danger">*</span></label>
<input type="text" name="classname" class="form-control">
</div>
</div>
<?php 
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin, school where schooladmin.school_id=school.school_id AND schooladmin.id = '$id' ");
$row = mysqli_fetch_array($data);
 $stage = $row['stage'];

 if ($stage == "Senior Secondary") { 
    ?>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Faculty <span class="login-danger">*</span></label>
<select class="form-control" name="faculty" required>
<option>Please Select Faculty </option>
<option value="Science">Science</option>
<option value="Commercial">Commercial</option>
<option value="Arts">Arts</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Level <span class="login-danger">*</span></label>
<select class="form-control" name="level" required>
<option>Please Select Level </option>
<option value="SSS 1">SSS 1</option>
<option value="SSS 2">SSS 2</option>
<option value="SSS 3">SSS 3</option>
</select>
</div>
</div>
<?php }
elseif ($stage == "Junior Secondary") { ?>
    <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Level <span class="login-danger">*</span></label>
<select class="form-control" name="level" required>
<option>Please Select Level </option>
<option value="JSS 1">JSS 1</option>
<option value="JSS 2">JSS 2</option>
<option value="JSS 3">JSS 3</option>
</select>
</div>
</div>
<?php
}
 ?>
<!-- <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class Master <span class="login-danger">*</span></label>
<input type="text" name="classmaster" class="form-control">
</div>
</div> -->

<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Location <span class="login-danger">*</span></label>
<select class="form-control" name="location">
<option>Select Location </option>
<option value="Room 1">Room 1</option>
<option value="Room 2">Room 2</option>
<option value="Room 3">Room 3</option>
<option value="Room 4">Room 4</option>
</select>
</div>
</div>

<input type="hidden" class="form-control" id="val-name" name="date"
                                                        value="<?php echo date("F j, Y"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="month"
                                                        value="<?php echo date("F"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="year"
                                                        value="<?php echo date("Y"); ?>">
<div class="col-12">
<div class="student-submit">
<button type="submit" name="submit" class="btn btn-primary">Add Class</button>
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