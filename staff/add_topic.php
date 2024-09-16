<?php
include('include/header.php');
require __DIR__ . '/include/sender.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the school ID and name from the session
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "SELECT school_id, schoolname FROM schooladmin WHERE id = '$id'");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
$schoolname = $row['schoolname'];

// Get the teacher ID and name from the database
$teacher_query = "SELECT id, firstname, lastname FROM teacher WHERE id = '$id'";
$teacher_data = mysqli_query($sql_con, $teacher_query);
$teacher_row = mysqli_fetch_array($teacher_data);
$teacher_id = $teacher_row['id'];
$teachername = $teacher_row['firstname'] . " " . $teacher_row['lastname'];

if (isset($_POST['curriculumsubmit'])) {
    // Collect form data
    $day = $_POST['day'];
    $due_date = $_POST['due_date'];
    $topic = $_POST['topic'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // Insert curriculum data
    $curriculum_query = "INSERT INTO curriculum (school_id, schoolname, teacher_id, teachername, day, due_date, topic, date, month, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $curriculum_stmt = mysqli_prepare($sql_con, $curriculum_query);

    if ($curriculum_stmt === false) {
        die("Error preparing curriculum statement: " . mysqli_error($sql_con));
    }

    $curriculum_result = mysqli_stmt_bind_param($curriculum_stmt, "ssssssssss", $school_id, $schoolname, $teacher_id, $teachername, $day, $due_date, $topic, $date, $month, $year);

    if ($curriculum_result === false) {
        die("Error binding parameters for curriculum: " . mysqli_stmt_error($curriculum_stmt));
    }

    $curriculum_exec_result = mysqli_stmt_execute($curriculum_stmt);

    if (!$curriculum_exec_result) {
        die("Error executing curriculum statement: " . mysqli_stmt_error($curriculum_stmt));
    }

    echo "Curriculum data inserted successfully.<br>";
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Topic</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="syllabus.php">Syllabus/</a></li>
                            <li class="breadcrumb-item active">Add Topic</li>
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
                                    <h5 class="form-title student-info">Topic Information</h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Day</label>
                                        <input class="form-control" name="day" type="text" placeholder="Enter Day" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Due Date</label>
                                        <input class="form-control" name="due_date" type="date" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Topic</label>
                                        <input class="form-control" name="topic" type="text" placeholder="Enter Topic" required>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="date" value="<?php echo date("F j, Y"); ?>">
                                <input type="hidden" class="form-control" name="month" value="<?php echo date("F"); ?>">
                                <input type="hidden" class="form-control" name="year" value="<?php echo date("Y"); ?>">
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="curriculumsubmit" value="curriculumsubmit" class="btn btn-primary">Register</button>
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
<script src="assets/js/script.js"></script>
</body>
</html>
