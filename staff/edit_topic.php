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

// Get the topic ID from the URL
$topic_id = $_GET['id'];

// Fetch the existing topic information
$topic_query = "SELECT day, due_date, topic FROM curriculum WHERE id = ?";
$topic_stmt = mysqli_prepare($sql_con, $topic_query);
mysqli_stmt_bind_param($topic_stmt, "s", $topic_id);
mysqli_stmt_execute($topic_stmt);
$topic_result = mysqli_stmt_get_result($topic_stmt);
$topic_row = mysqli_fetch_array($topic_result);

if (isset($_POST['curriculumupdate'])) {
    // Collect form data
    $day = $_POST['day'];
    $due_date = $_POST['due_date'];
    $topic = $_POST['topic'];

    // Update curriculum data
    $update_query = "UPDATE curriculum SET day = ?, due_date = ?, topic = ? WHERE id = ?";
    $update_stmt = mysqli_prepare($sql_con, $update_query);

    if ($update_stmt === false) {
        die("Error preparing update statement: " . mysqli_error($sql_con));
    }

    $update_result = mysqli_stmt_bind_param($update_stmt, "ssss", $day, $due_date, $topic, $topic_id);

    if ($update_result === false) {
        die("Error binding parameters for update: " . mysqli_stmt_error($update_stmt));
    }

    $update_exec_result = mysqli_stmt_execute($update_stmt);

    if (!$update_exec_result) {
        die("Error executing update statement: " . mysqli_stmt_error($update_stmt));
    }

    // Redirect to syllabus.php with a success message
    header("Location: syllabus.php?message=Updated Successfully");
    exit();
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Topic</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="syllabus.php">Syllabus/</a></li>
                            <li class="breadcrumb-item active">Edit Topic</li>
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
                                        <input class="form-control" name="day" type="text" value="<?php echo htmlspecialchars($topic_row['day']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Due Date</label>
                                        <input class="form-control" name="due_date" type="date" value="<?php echo htmlspecialchars($topic_row['due_date']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Topic</label>
                                        <input class="form-control" name="topic" type="text" value="<?php echo htmlspecialchars($topic_row['topic']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="curriculumupdate" value="curriculumupdate" class="btn btn-primary">Update</button>
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
