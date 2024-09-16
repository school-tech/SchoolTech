<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "SELECT * FROM schooladmin WHERE id = '$id'");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
$school_name = $row['schoolname'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $period_names = $_POST['period_name'];
    $start_times = $_POST['start_time'];
    $end_times = $_POST['end_time'];

    $current_date = date('Y-m-d');
    $current_month = date('m');
    $current_year = date('Y');

    $success = true;
    $message = "";

    for ($i = 0; $i < count($period_names); $i++) {
        $period_name = mysqli_real_escape_string($sql_con, $period_names[$i]);
        $start_time = mysqli_real_escape_string($sql_con, $start_times[$i]);
        $end_time = mysqli_real_escape_string($sql_con, $end_times[$i]);

        $query = "INSERT INTO `school_period` (`school_id`, `schoolname`, `period_name`, `start_time`, `end_time`, `date`, `month`, `year`) 
                  VALUES ('$school_id', '$school_name', '$period_name', '$start_time', '$end_time', '$current_date', '$current_month', '$current_year')";

        if (!mysqli_query($sql_con, $query)) {
            $success = false;
            $message = "Error adding periods: " . mysqli_error($sql_con);
            break;
        }
    }

    if ($success) {
        $message = "Periods added successfully";
        header("Location: timetable.php");
    }
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add School Period</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="timetable.php">Timetable/</a></li>
                        <li class="breadcrumb-item active">Add School Period</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <div id="periodsContainer">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>School Periods</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Period Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="period_name[]" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Start Time <span class="login-danger">*</span></label>
                                            <input type="time" class="form-control" name="start_time[]" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>End Time <span class="login-danger">*</span></label>
                                            <input type="time" class="form-control" name="end_time[]" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/script.js"></script>

<?php
if (isset($message)) {
    echo "<script>alert('$message');</script>";
}
?>
</body>
</html>