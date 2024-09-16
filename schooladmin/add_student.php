<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin, school where schooladmin.school_id=school.school_id AND schooladmin.id = '$id' ");
$row = mysqli_fetch_array($data);
 $schoolid = $row['school_id'];
 $school_name = $row['schoolname'];



if (isset($_POST['submit'])) {
    $school_id = $schoolid;
    $schoolname = $school_name;
    $adm_no = $_POST['adm_no'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $bgroup = $_POST['bgroup'];
    $class = $_POST['class'];
    $homeaddress = $_POST['homeaddress'];
    $phonenumber = $_POST['contactnumber'];
    $emailaddress = $_POST['emailaddress'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $disability = $_POST['disability'];
    $disability_type = $_POST['disability_type'];
    $sick = $_POST['sick'];
    $sick_type = $_POST['sick_type'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // Handle image upload
    $photo = '';
    if(isset($_FILES['passport_picture']) && $_FILES['passport_picture']['error'] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES['passport_picture']['name'];
        $filetype = $_FILES['passport_picture']['type'];
        $filesize = $_FILES['passport_picture']['size'];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) {
            die("Error: File size is larger than the allowed limit.");
        }

        // Verify MIME type of the file
        if(in_array($filetype, $allowed)) {
            // Generate a unique filename to avoid overwriting
            $new_filename = uniqid() . '.' . $ext;
            $upload_path = "assets/img/student/" . $new_filename;
            if(move_uploaded_file($_FILES['passport_picture']['tmp_name'], $upload_path)) {
                $photo = $upload_path;
                echo "Image uploaded successfully. Path: $photo<br>";
            } else {
                echo "Error: File upload failed. Error code: " . $_FILES['passport_picture']['error'] . "<br>";
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.<br>"; 
        }
    }

    $query = "INSERT INTO student(school_id, adm_no, schoolname, firstname, lastname, dob, gender, bgroup, class, homeaddress, phonenumber, emailaddress, religion, nationality, disability, disability_type, sick, sick_type, date, month, year, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($sql_con, $query);

    if ($stmt === false) {
        die("Error preparing statement: " . mysqli_error($sql_con));
    }

    $result = mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $school_id, $adm_no, $schoolname, $firstname, $lastname, $dob, $gender, $bgroup, $class, $homeaddress, $phonenumber, $emailaddress, $religion, $nationality, $disability, $disability_type, $sick, $sick_type, $date, $month, $year, $photo);

    if ($result === false) {
        die("Error binding parameters: " . mysqli_stmt_error($stmt));
    }

    $exec_result = mysqli_stmt_execute($stmt);

    if ($exec_result) {
        echo "<script>alert('Student Added Successfully!!')</script>";
        echo "<script>window.location='students.php';</script>";
    } else {
        echo "Failed: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Add Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="students.php">Student/</a></li>
<li class="breadcrumb-item active">Register Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Student Information <span>
<div class="student-group-form">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>
</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Photo </label>
<input class="form-control" name="passport_picture" type="file" accept="image/*">
</div>
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
<!-- <div class="form-group local-forms calendar-icon"> -->
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control" name="dob" type="date" placeholder="DD-MM-YYYY" required>
<!-- </div> -->
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Blood Group</label>
<select class="form-control" name="bgroup">
<option>Select Blood Group </option>
<option value="Not Known">Not Known</option>
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
<select class="form-control" name="religion" required>
<option>Please Select Religion </option>
<option value="Islam">Islam</option>
<option value="Christianity">Christianity</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>E-Mail</label>
<input class="form-control"name="emailaddress" type="text" placeholder="Enter Email Address">
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
<select class="form-control" name="nationality" required>
<option>Please Select Nationality </option>
<option value="Sierra Leonean">Sierra Leonean</option>
<option value="Sierra Leonean">Other</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Admission ID </label>
<input class="form-control" name="adm_no" type="text" placeholder="Enter Admission ID" required>
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
<div class="col-12">
<h5 class="form-title student-info">Health Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>

<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Sick? <span class="login-danger">*</span></label>
        <select class="form-control" name="sick" id="sick" required>
            <option value="">Select</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
    </div>
</div>

<div class="col-12 col-sm-4" id="sickTypeDiv" style="display: none;">
    <div class="form-group local-forms">
        <label>Sick Type <span class="login-danger">*</span></label>
        <select class="form-control" name="sick_type" id="sickType">
            <option value="">Select Sick Type</option>
            <option value="Tuberculosis">Tuberculosis</option>
            <option value="Epileptic seizures">Epileptic seizures</option>
            <option value="Sickle cell disease">Sickle cell disease</option>
            <option value="Diabetes">Diabetes</option>
            <option value="Cancer">Cancer</option>
        </select>
    </div>
</div>

<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Are you Disabled? <span class="login-danger">*</span></label>
        <select class="form-control" name="disability" id="disability" required>
            <option value="">Select</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
    </div>
</div>

<div class="col-12 col-sm-4" id="disabilityTypeDiv" style="display: none;">
    <div class="form-group local-forms">
        <label>Disability Type <span class="login-danger">*</span></label>
        <select class="form-control" name="disability_type" id="disabilityType">
            <option value="">Select Disability Type</option>
            <option value="Physical disability">Physical disability</option>
            <option value="Visual impairment">Visual impairment</option>
            <option value="Hearing impairment">Hearing impairment</option>
            <option value="Intellectual disability">Intellectual disability</option>
            <option value="Mental health condition">Mental health condition</option>
            <option value="Learning disability">Learning disability</option>
            <option value="Other">Other</option>
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

</div>
<script>

   /*  $(document).ready(function(){
        $('#sick').on('change', function(){
            if ($(this).val() == 'Yes') {
                $('#sickTypeDiv').show();
            } else {
                $('#sickTypeDiv').hide();
            }
        });

        $('#disability').on('change', function(){
            if ($(this).val() == 'Yes') {
                $('#disabilityTypeDiv').show();
            } else {
                $('#disabilityTypeDiv').hide();
            }
        });
    }); */

    
</script>




<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sickSelect = document.getElementById('sick');
    const sickTypeDiv = document.getElementById('sickTypeDiv');
    const sickTypeSelect = document.getElementById('sickType');

    const disabilitySelect = document.getElementById('disability');
    const disabilityTypeDiv = document.getElementById('disabilityTypeDiv');
    const disabilityTypeSelect = document.getElementById('disabilityType');

    sickSelect.addEventListener('change', function() {
        if (this.value === 'Yes') {
            sickTypeDiv.style.display = 'block';
            sickTypeSelect.setAttribute('required', 'required');
        } else {
            sickTypeDiv.style.display = 'none';
            sickTypeSelect.removeAttribute('required');
            sickTypeSelect.value = '';
        }
    });

    disabilitySelect.addEventListener('change', function() {
        if (this.value === 'Yes') {
            disabilityTypeDiv.style.display = 'block';
            disabilityTypeSelect.setAttribute('required', 'required');
        } else {
            disabilityTypeDiv.style.display = 'none';
            disabilityTypeSelect.removeAttribute('required');
            disabilityTypeSelect.value = '';
        }
    });
});
</script>

</body>

</html>