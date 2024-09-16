<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
$schoolname = $row['schoolname'];

// Fetch periods from the database
$periods_query = mysqli_query($sql_con, "SELECT period_name FROM school_period  ORDER BY start_time");
$periods = [];
while ($period = mysqli_fetch_assoc($periods_query)) {
    $periods[] = $period['period_name'];
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Timetable</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
                        <li class="breadcrumb-item active">Timetable</li>
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
                                    <h3 class="page-title">Class Timetable</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="add_period.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-container d-flex flex-wrap">
                            <div class="table-wrapper mb-3 me-3">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>DAYS/TIME</th>
                                            <?php foreach ($periods as $period): ?>
                                                <th><?php echo htmlspecialchars($period); ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <!-- <tbody> -->
                                    <!-- Code removed for now -->
                                    <!-- </tbody> -->
                                </table>
                            </div>
                        </div>

                        <button id="submitTimetable" class="btn btn-primary mt-3">Submit</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .time-picker-container {
        display: inline-flex;
        align-items: center;
    }
    .time-picker {
        width: 100px;
    }
    .input-group-text {
        cursor: pointer;
    }
</style>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.getElementById('submitTimetable');
    const initialTable = document.querySelector('.table-wrapper table');
});
</script>
</body>
</html>