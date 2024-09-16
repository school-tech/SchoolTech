<?php
include('include/header.php');
require 'include/sender.php';

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$schoolid = $row['school_id'];
$school_name = $row['schoolname'];

// Get the student ID from the URL
$student_id = isset($_GET['student_id']) ? $_GET['student_id'] : null;

if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $school_name;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $occupation = $_POST['occupation'];
    $emailaddress = $_POST['emailaddress'];
    $phonenumber = $_POST['phonenumber'];
    $homeaddress = $_POST['homeaddress'];
    $relationship = $_POST['relationship'];
    $nin = $_POST['nin'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $data = mysqli_query($sql_con, "INSERT INTO parent(school_id, schoolname, firstname, lastname, gender, dob, occupation, emailaddress, phonenumber, homeaddress, relationship, nin, date, month, year, student_id) VALUES ('$school_id','$schoolname','$firstname','$lastname','$gender','$dob','$occupation','$emailaddress','$phonenumber','$homeaddress','$relationship','$nin','$date','$month','$year', '$student_id')");

    if ($data) {
        $subject = 'Parent Account Created';
        $body = "Dear $firstname $lastname,<br><br>Your parent account has been successfully created in our system.<br><br>Best regards,<br>School Administration";

        $emailResult = sendEmail($emailaddress, $subject, $body);

        if ($emailResult === true) {
            echo "<script>alert('Parent Added Successfully and email sent!')</script>";
        } else {
            echo "<script>alert('Parent Added Successfully but failed to send email. Error: $emailResult')</script>";
        }
    } else {
        echo "Failed: " . mysqli_error($sql_con);
    }
}
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Add Parent</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="parents.php">Parents/</a></li>
<li class="breadcrumb-item active">Add Parent</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form method="post">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Parent Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" name="firstname" type="text" placeholder="Enter First Name" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" name="lastname" type="text" placeholder="Enter Last Name" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select name="gender" class="form-control" required>
<option>Select Gender</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control" name="dob" type="date" placeholder="DD-MM-YYYY" required>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Occupation <span class="login-danger">*</span></label>
<input class="form-control" name="occupation" type="text" placeholder="Enter Occupation" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>E-Mail <span class="login-danger">*</span></label>
<input class="form-control" name="emailaddress" type="email" placeholder="Enter Email Address" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Phone <span class="login-danger">*</span></label>
<input class="form-control" name="phonenumber" type="text" placeholder="Enter Phone Number" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Home Address <span class="login-danger">*</span></label>
<input class="form-control" name="homeaddress" type="text" placeholder="Enter Home Address" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Relationship to Student <span class="login-danger">*</span></label>
<select class="form-control" name="relationship" required>
<option>Select Relationship</option>
<option value="Father">Father</option>
<option value="Mother">Mother</option>
<option value="Guardian">Guardian</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>NIN (National Identification Number)</label>
<input class="form-control" name="nin" type="text" placeholder="Enter NIN">
</div>
</div>
<input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y"); ?>">
<input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
<input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">
<div class="col-12">
<div class="student-submit">
<button type="submit" name="submit" value="submit" class="btn btn-primary">Register</button>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>