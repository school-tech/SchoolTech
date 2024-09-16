<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
 $schoolid = $row['school_id'];
 $school_name = $row['schoolname'];



if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $schoolid;
    $teacher_name = $_POST['teacher_name'];
    $subject_title = $_POST['subject_title'];
    $class = $_POST['class'];
    $faculty = $_POST['faculty'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
  
  
  
    $data = mysqli_query($sql_con, "INSERT INTO subject(school_id, schoolname, teacher_name, subject_title, class, faculty, date, month, year) VALUES ('$school_id','$schoolname','$teacher_name','$subject_title','$class','$faculty','$date','$month','$year')");
    if ($data) {
      echo"<script>alert('Subject Added Successfully!!')</script>";
      echo"<script>window.location='subjects.php';</script>";
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
<h3 class="page-title">Add Subject</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="subjects.php">Subject/</a></li>
<li class="breadcrumb-item active">Add Subject</li>
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
<h5 class="form-title"><span>Subject Information</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject Name <span class="login-danger">*</span></label>
<input type="text" class="form-control" name="subject_title" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<select class="form-control" name="class" required>
<option>Please Select Class </option>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin, school where schooladmin.school_id=school.school_id AND schooladmin.id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
 $query = "SELECT * from class WHERE school_id = $school_id";
 $result = mysqli_query($sql_con, $query);
 ?>
         <?php

         while ($row = mysqli_fetch_assoc($result)) {
             ?>
<option value="<?php echo $row['classname'] ?>"> <?php echo $row['classname'] ?></option>
<?php
         }
?>
</select>
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
<?php
}
 ?>
 <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Teacher <span class="login-danger">*</span></label>
<select class="form-control" name="teacher_name" required>
<option>Please Select Teacher </option>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin, school where schooladmin.school_id=school.school_id AND schooladmin.id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
 $query = "SELECT * from teacher WHERE school_id = $school_id";
 $result = mysqli_query($sql_con, $query);
 ?>
         <?php

         while ($row = mysqli_fetch_assoc($result)) {
             ?>
<option value="<?php echo $row['firstname']; echo " ";  echo $row['lastname'] ?>"> <?php echo $row['firstname']; echo" "; echo $row['lastname'] ?></option>
<?php
         }
?>
</select>
</div>
</div>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin, school where schooladmin.school_id=school.school_id AND schooladmin.id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
 $query = "SELECT * from teacher WHERE school_id = $school_id";
 $result = mysqli_query($sql_con, $query);
 ?>
<input type="hidden" class="form-control" id="teacher-id" name="teacher_id"
                                                        value="<?php echo $row['id']; ?>">
<input type="hidden" class="form-control" id="val-name" name="date"
                                                        value="<?php echo date("F j, Y"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="month"
                                                        value="<?php echo date("F"); ?>">
                                                    <input type="hidden" class="form-control" id="val-name" name="year"
                                                        value="<?php echo date("Y"); ?>">
<div class="col-12">
<div class="student-submit">
<button type="submit" name="submit" value="submit" class="btn btn-primary">Add Subject</button>
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