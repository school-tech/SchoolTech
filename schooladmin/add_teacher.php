<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$schoolid = $row['school_id'];
$school_name = $row['schoolname'];

require __DIR__ . '/include/sender.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $school_name;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $pincode = $_POST['pincode'];
    $nationality = $_POST['nationality'];
    $homeaddress = $_POST['homeaddress'];
    $contact_code = '+232';
    $contactnumber = $_POST['contactnumber'];
    $phonenumber = "+232$contactnumber";
    $nin = $_POST['nin'];
    $religion = $_POST['religion'];
    $emailaddress = $_POST['emailaddress'];
    $class = $_POST['class'];
    $bgroup = $_POST['bgroup'];
    $faculty = $_POST['faculty'];
    $level = $_POST['level'];
    $Password = rand();
    // $disability_type = $_POST['disability_type'];
    $status = 'Active';
    // $sick_type = $_POST['sick_type'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $teacher_added_successfully = mysqli_query($sql_con, "INSERT INTO teacher(school_id, schoolname, firstname, lastname, gender, dob, pincode, nationality, homeaddress, contactcode, phonenumber, nin, religion, emailaddress, class, faculty, level, password, status, date, month, year) VALUES ('$school_id','$school_name','$firstname','$lastname','$gender','$dob','$pincode','$nationality','$homeaddress','$contact_code','$phonenumber','$nin','$religion','$emailaddress','$class','$faculty','$level','$password','$status','$date','$month','$year')");

    if ($teacher_added_successfully) {
        // Send email to the teacher
        $subject = "Welcome to Our School";
        $body = "
        <html>
        <body>
            <h2>Welcome to Our School, $firstname $lastname!</h2>
            <p>Your account has been successfully created in our system.</p>
            <p>Your login credentials:</p>
            <p>Email: $emailaddress</p>
            <p>Password: $Password</p>
            <p>Please log in and change your password immediately.</p>
            <p>Best regards,<br>School Administration</p>
        </body>
        </html>
        ";

        $emailResult = sendEmail($emailaddress, $subject, $body);

        if ($emailResult === true) {
            echo "<script>alert('Teacher added successfully and welcome email sent!')</script>";
        } else {
            echo "<script>alert('Teacher added successfully but email could not be sent. Error: $emailResult')</script>";
        }
    } else {
        echo "<script>alert('Failed to add teacher!')</script>";
    }

    echo "<script>window.location='teachers.php';</script>";
}

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Teacher</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="teachers.php">Teacher/</a></li>
                            <li class="breadcrumb-item active">Add Teacher</li>
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
                                    <h5 class="form-title student-info">Teacher Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="firstname" type="text" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="lastname" type="text" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select name="gender" class="form-control">
                                            <option>Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <!-- <div class="form-group local-forms calendar-icon"> -->
                                    <label>Date Of Birth <span class="login-danger">*</span></label>
                                    <input class="form-control" name="dob" type="date" placeholder="DD-MM-YYYY">
                                    <!-- </div> -->
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Pin Code </label>
                                        <input class="form-control" name="pincode" type="text" placeholder="Enter Pin Code">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nin </label>
                                        <input class="form-control" name="nin" type="text" placeholder="Enter Nin">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Blood Group</label>
                                        <select class="form-control" name="bgroup">
                                            <option>Select Blood Group </option>
                                            <option value="B+">B+</option>
                                            <option value="A+">A+</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="B-">B-</option>
                                            <option value="A-">A-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Religion <span class="login-danger">*</span></label>
                                        <select class="form-control" name="religion">
                                            <option>Please Select Religion </option>
                                            <option value="Islam">Islam</option>
                                            <option value="Christianity">Christianity</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>E-Mail <span class="login-danger">*</span></label>
                                        <input class="form-control" name="emailaddress" type="text" placeholder="Enter Email Address">
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
                                <?php } elseif ($stage == "Junior Secondary") { ?>
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
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nationality <span class="login-danger">*</span></label>
                                        <select class="form-control" name="nationality">
                                            <option>Please Select Nationality </option>
                                            <option value="Sierra Leonean">Sierra Leonean</option>
                                            <option value="Sierra Leonean">>Other</option>
                                            <option value="Sierra Leonean">>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Admission ID </label>
                                        <input class="form-control" name="adm_no" type="text" placeholder="Enter Admission ID">
                                    </div>
                                </div> -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone </label>
                                        <input class="form-control" name="contactnumber" type="text" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Home Address </label>
                                        <input class="form-control" name="homeaddress" type="text" placeholder="Enter Home Address">
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <h5 class="form-title student-info">Health Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Sick? <span class="login-danger">*</span></label>
                                        <select class="form-control" name="sick">
                                            <option>Select </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Deform? <span class="login-danger">*</span></label>
                                        <select class="form-control" name="disability">
                                            <option>Select </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-sm-4">
<div class="form-group students-up-files">
<label>Upload Student Photo (150px X 150px)</label>
<div class="uplod">
<label class="file-upload image-upbtn mb-0">
Choose File <input type="file">
</label>
</div>
</div>
</div> -->
                                <input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
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