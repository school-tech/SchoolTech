<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from mbsse where id = '$id' ");
$row = mysqli_fetch_array($data);




if (isset($_POST['schoolsubmit'])) {
    $school_id = $_POST['school_id'];
    $schoolname = $_POST['schoolname'];
    $district = $_POST['district'];
    $schooladdress = $_POST['schooladdress'];
    $stage = $_POST['level'];
    $type = $_POST['category'];
    $adminname = $_POST['adminname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $pincode = $_POST['pincode'];
    $emailaddress = $_POST['emailaddress'];
    $phonenumber = $_POST['contactnumber'];
    $homeaddress = $_POST['homeaddress'];
    $password = rand();
    $status = 'Active';
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];



    $data = mysqli_query($sql_con, "INSERT INTO school(school_id, school_name, district, schooladdress, stage, type, status, date, month, year) VALUES ('$school_id','$schoolname','$district','$schooladdress','$stage','$type','$status','$date','$month','$year')");
    $data = mysqli_query($sql_con, "INSERT INTO schooladmin(school_id, schoolname, adminname, gender, dob, nationality, pincode, emailaddress, phonenumber, homeaddress, password, status, date, month, year) VALUES ('$school_id','$schoolname','$adminname','$gender','$dob','$nationality','$pincode','$emailaddress','$phonenumber','$homeaddress','$password','$status','$date','$month','$year')");

    if ($data) {
        $subdata = mysqli_query($sql_con, "select * from schooladmin");
        $row = mysqli_fetch_array($subdata);
        if ($school_id == $row['school_id']) {
            echo "<script>alert('School Exists!')</script>";
        }
        elseif ($pincode == $row['pincode']) {
            echo "<script>alert('School Admin Exists!')</script>";
        }
        else {
            echo "<script>alert('School Added Successfully!!')</script>";
            echo "<script>window.location='view_staff.php';</script>";
        }
    } else {
        echo "Failed:" . mysqli_error($conn);
    }
}

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add School</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
                            <li class="breadcrumb-item active">Add School</li>
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
                                    <h5 class="form-title student-info">School Information <span>
                                            <div class="student-group-form">
                                            </div>
                                        </span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>School ID </label>
                                        <input class="form-control" name="school_id" type="text" placeholder="Enter School ID" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>School Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="schoolname" type="text" placeholder="Enter School Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>School Address <span class="login-danger">*</span></label>
                                        <input class="form-control" name="schooladdress" type="text" placeholder="Enter School Address" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>District</label>
                                        <select class="form-control" name="district" required>
                                            <option>Select District </option>
                                            <option value="Freetown">Freetown</option>
                                            <option value="Bo">Bo</option>
                                            <option value="Makeni">Makeni</option>
                                            <option value="Kenema">Kenema</option>
                                            <option value="Bonthe">Bonthe</option>
                                            <option value="Kono">Kono</option>
                                            <option value="Kailahun">Kailahun</option>
                                            <option value="Tonkolili">Tonkolili</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Level <span class="login-danger">*</span></label>
                                        <select name="level" class="form-control" required>
                                            <option>Select Level</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Junior Secondary">Junior Secondary</option>
                                            <option value="Senior Secondary">Senior Secondary</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Category <span class="login-danger">*</span></label>
                                        <select class="form-control" name="category" required>
                                            <option>Select Category </option>
                                            <option value="Government">Government</option>
                                            <option value="Government Assisted">Government Assisted</option>
                                            <option value="Private">Private</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h5 class="form-title student-info">School Admin Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Name </label>
                                        <input class="form-control" name="adminname" type="text" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select name="gender" class="form-control" required>
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>DOB <span class="login-danger">*</span></label>
                                        <input class="form-control" name="dob" type="date" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nationality <span class="login-danger">*</span></label>
                                        <select class="form-control" name="nationality" required>
                                            <option>Please Select Nationality </option>
                                            <option value="Sierra Leonean">Sierra Leonean</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Pincode <span class="login-danger">*</span></label>
                                        <input class="form-control" name="pincode" type="text" placeholder="Enter Pincode">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>E-Mail <span class="login-danger">*</span></label>
                                        <input class="form-control" name="emailaddress" type="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone </label>
                                        <input class="form-control" name="contactnumber" type="text" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Home Address </label>
                                        <input class="form-control" name="homeaddress" type="text" placeholder="Enter Home Address" required>
                                    </div>
                                </div>

                                <input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="schoolsubmit" value="schoolsubmit" class="btn btn-primary">Register</button>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>