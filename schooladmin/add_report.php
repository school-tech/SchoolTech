<?php
include('include/header.php');

$data = mysqli_query($sql_con, "select * from academic_year where id = '$id' ");
$row = mysqli_fetch_array($data);
$batch_ = $row['batch'];

$id = $_SESSION['id'];
$space = " ";
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$sender_name = $row['adminname'];
$schoolid = $row['school_id'];
$school_name = $row['schoolname'];

if (isset($_POST['reportsubmit'])) {
    $batch = $batch_;
    $school_id = $schoolid;
    $schoolname = $school_name;
    $adm_no = $_POST['adm_no'];
    $person_reported = $_POST['student_name'];
    $pr_gender = $_POST['gender'];
    $pr_rank = 'Student';
    $pr_ano = '123456';
    $pr_class = $_POST['class'];
    $sender = $sender_name;
    $sender_rank = 'Principal';
    $receiver = 'receiver';
    $receiver_rank = 'Parent';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = 'Pending';
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];



    $data = mysqli_query($sql_con, "INSERT INTO report(batch, school_id, schoolname, person_reported, pr_gender, pr_rank, pr_ano, pr_class, sender, sender_rank, receiver, receiver_rank, title, content, status, date, month, year) VALUES ('$batch','$school_id','$schoolname','$person_reported','$pr_gender','$pr_rank','$pr_ano','$pr_class','$sender','$sender_rank','$receiver','$receiver_rank','$title','$content','$status','$date','$month','$year')");
    if ($data) {
        echo "<script>alert('Report Sent Successfully!!')</script>";
        echo "<script>window.location='report.php';</script>";
    } else {
        echo "Failed:" . mysqli_error($conn);
    }
}

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Make Report</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="report_list.php">Report/</a></li>
                        <li class="breadcrumb-item active">Make Report</li>
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
                                <div class="col">
                                    <h5 class="form-title"><span>Report</span></h5>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search by NIN ...">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="search-student-btn">
                                        <button type="btn" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Student Name <span class="login-danger">*</span></label>
                                        <input type="text" name="student_name" class="form-control" required>
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
                                    <div class="form-group local-forms">
                                        <label>Class <span class="login-danger">*</span></label>
                                        <input type="text" name="class" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Report Title <span class="login-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Message <span class="login-danger">*</span></label>
                                        <input type="text" name="content" class="form-control" required>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="reportsubmit" class="btn btn-primary">Report</button>
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