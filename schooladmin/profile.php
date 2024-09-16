<?php  

include('include/header.php');



$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "SELECT * FROM schooladmin WHERE id = '$id'");
$row = mysqli_fetch_array($data);
//  $evangelist_id = $_SESSION['userid'];

if (isset($_POST['submit'])) {
    $evangelist_id = $id;
    $fname = $_POST['fname'];
    $middle_name = $_POST['middle_name'];
    $lname = $_POST['lname'];
    $age_category = $_POST['age_category'];
    $gender = $_POST['gender'];
    $contact_code = '+232';
    $contactnumber = $_POST['contactnumber'];
    $phonenumber = "+232$contactnumber";
    $homeaddress = $_POST['homeaddress'];
    $invite_type = $_POST['invite_type'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $invite_type = $_POST['invite_type'];


    mysqli_query($sql_con, "INSERT INTO invitee(evangelist_id, fname, Middle_name, lname, age_category, gender, contact_code, phonenumber, homeaddress, invite_type, date, month, year) VALUES ('$evangelist_id','$fname','$middle_name','$lname','$age_category','$gender','$contact_code','$phonenumber','$homeaddress','$invite_type','$date','$month','$year')");

    echo "<script>alert('Added Successfully!!')</script>";
    echo "<script>window.location='view_staff.php';</script>";
}
?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/ </a></li>
<li class="breadcrumb">Profile</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<?php if (!empty($row['image']) && file_exists($row['image'])) : ?>
<img class="rounded-circle" alt="User Image" src="<?php echo htmlspecialchars($row['admin_image']); ?>">
<?php else : ?>
<img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
<?php endif; ?>
</a>
</div>
<div class="col ms-md-n2 profile-user-info">
<h4 class="user-name mb-0"><?php echo htmlspecialchars($row['adminname']); ?></h4>
<h6 class="text-muted">School Principal</h6>
<div class="user-Location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($row['homeaddress']); ?></div>
<div class="about-text"></div>
</div>
<!-- <div class="col-auto profile-btn">
<a href class="btn btn-primary">
Edit
</a>
</div> -->
</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
</li>
</ul>
</div>
<div class="tab-content profile-tab-cont">

<div class="tab-pane fade show active" id="per_details_tab">

<div class="row">
<div class="col-lg-9">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span>
<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
</h5>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
<p class="col-sm-9"><?php $id = $_SESSION['id'];

$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data); echo $row['adminname'];?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
<p class="col-sm-9"><?php echo $row['dob'];?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
<p class="col-sm-9"><?php echo $row['emailaddress'];?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
<p class="col-sm-9"><?php echo $row['phonenumber'];?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
<p class="col-sm-9 mb-0"><?php echo $row['homeaddress'];?></p>
</div>
</div>
</div>
<div class="col-lg-3">

<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-center">
<span>Account Status</span>
</h5>
<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> <?php echo $row['status'];?></button>
</div>
</div>

</div>
</div>

</div>


<div id="password_tab" class="tab-pane fade">
<div class="card">
<div class="card-body">
<h5 class="card-title">Change Password</h5>
<div class="row">
<div class="col-md-10 col-lg-6">
<form method="post">
<div class="form-group">
<label>Old Password</label>
<input type="password" name="old_password" class="form-control" required>
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" name="new_password" class="form-control" required>
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="confirm_password" class="form-control" required>
</div>
<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
</form>
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


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>