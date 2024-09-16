<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from teacher where id = '$id' ");
$row = mysqli_fetch_array($data);

// Fetch periods from the database
$school_id = $row['school_id'];
$periods_query = mysqli_query($sql_con, "SELECT period_name FROM school_period WHERE school_id = '$school_id' ORDER BY start_time");
$periods = [];
while ($period = mysqli_fetch_assoc($periods_query)) {
    $periods[] = $period['period_name'];
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome Mr <?php echo $row['lastname'] ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Classes</h6>
                                <h3>04/06</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Students</h6>
                                <?php
                                $query = "SELECT COUNT(*) FROM student, teacher WHERE student.class = teacher.class AND teacher.id = $id";
                                $data = mysqli_query($sql_con, $query);
                                $row = mysqli_fetch_array($data);
                                ?><h2><b><?php echo $row[0] ?></b></h2>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Lessons</h6>
                                <h3>30/50</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Hours</h6>
                                <h3>15/20</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Today</h5>
                                </div>
                                <div class="col-6">
                                    <span class="float-end view-link"><a href="#">View Time table</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 pb-3">
                            <div class="table-responsive lesson">
                                <table class="table table-center">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="date">
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>Physics</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="date">
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>Chemistry</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-3 d-flex" style="padding-left: 25px;"> <!-- Adjusted column size -->
                    <div class="card flex-fill comman-shadow" style="max-width: 700px;"> <!-- Increased max width -->
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h5 class="card-title">Term Progress</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="term-progress-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Timetable</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
                                        <tbody>
                                            <!-- Placeholder for timetable data -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <p>Copyright © 2022 Dreamguys.</p>
    </footer>

</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var options = {
        chart: {
            type: 'donut',
        },
        series: [55, 5], // Example data: 55 lessons completed, 5 lessons remaining
        labels: ['Completed', 'Remaining'],
        colors: ['#4CAF50', '#FF9800'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#term-progress-chart"), options);
    chart.render();
});
</script>
</body>
</html>