<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "SELECT * FROM schooladmin WHERE id = '$id'");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
$schoolname = $row['schoolname'];

// Fetch periods from the database
$periods_query = mysqli_query($sql_con, "SELECT period_name FROM school_period ORDER BY start_time");
$periods = [];
while ($period = mysqli_fetch_assoc($periods_query)) {
    $periods[] = $period['period_name'];
}

// Fetch curriculum data
$curriculum_query = "SELECT id, day, due_date, topic FROM curriculum WHERE school_id = '$school_id' ORDER BY due_date";
$curriculum_data = mysqli_query($sql_con, $curriculum_query);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Syllabus</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
                        <li class="breadcrumb-item active">Syllabus</li>
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
                                <div class="col" style="display: flex; justify-content: space-between; align-items: center;">
                                    <h3 class="page-title">Course Calendar</h3>
                                    <div class="col-auto">
                                        <a href="add_topic.php" class="btn btn-success" title="Add Topic">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <button class="btn btn-primary" onclick="exportToPDF()">
                                            <i class="fas fa-download"></i> PDF
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="syllabus-table">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Due Date</th>
                                        <th>Topic</th>
                                        <th class="action-column">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($curriculum_row = mysqli_fetch_array($curriculum_data)) { ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($curriculum_row['day']); ?></td>
                                            <td><?php echo htmlspecialchars($curriculum_row['due_date']); ?></td>
                                            <td><?php echo htmlspecialchars($curriculum_row['topic']); ?></td>
                                            <td>
                                                <a href="edit_topic.php?id=<?php echo $curriculum_row['id']; ?>" class="btn btn-primary" title="Edit Topic">
                                                    <i class="fas fa-edit" style="color: white;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .table th {
        padding: 10px; /* Increase padding for better visibility */
    }
    .action-column {
        min-width: 100px; /* Set a minimum width for the action column */
        text-align: center; /* Center the action buttons */
    }
</style>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>

<script>
function exportToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    // Add school name
    const schoolName = <?php echo json_encode($schoolname); ?>;
    doc.setFontSize(18);
    doc.text(schoolName, doc.internal.pageSize.width / 2, 20, { align: 'center' });
    
    // Add "Syllabus" text
    doc.setFontSize(14);
    doc.text("Syllabus", doc.internal.pageSize.width / 2, 30, { align: 'center' });
    
    // Add the date
    const today = new Date();
    doc.setFontSize(12);
    doc.text(`Date: ${today.toLocaleDateString()}`, doc.internal.pageSize.width / 2, 40, { align: 'center' });
    
    // Add the table
    doc.autoTable({ 
        html: '#syllabus-table',
        startY: 50,
        styles: { fontSize: 8 },
        // Exclude the last column (Action) from the PDF export
        didParseCell: function(data) {
            if (data.column.index === 3) {
                data.cell.styles.fillColor = null; // Prevents the action column from being included
                data.cell.styles.textColor = [255, 255, 255]; // Set text color to white
            }
        }
    });
    
    doc.save('syllabus.pdf');
}
</script>

</body>
</html>