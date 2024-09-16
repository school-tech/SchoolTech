<?php
include('include/header.php');
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Attendance Registers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
                        <li class="breadcrumb-item active">Attendance Registers</li>
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
                                    <h3 class="page-title">This Week</h3>
                                    <a href="add_attendance.php" class="btn btn-primary" title="Add Topic">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <br>
                            <div class="row mb-3">
                                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                    <button class="btn btn-primary" onclick="exportToPDF()">
                                        <i class="fas fa-download"></i> PDF
                                    </button>
                                    <button class="btn btn-primary" onclick="exportToExcel()">
                                        <i class="fas fa-file-excel"></i> Excel
                                    </button>
                                    <button class="btn btn-primary" onclick="exportToCSV()">
                                                    <i class="fas fa-file-csv"></i> CSV
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="attendance-table">
                                <thead>
                                    <tr>
                                        <th>Coach / Trainer</th>
                                        <th>Class</th>
                                        <th>Date / Time</th>
                                        <th>Members</th>
                                        <th>Present</th>
                                        <th>Absent</th>
                                        <th>Void</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kim Sinclair<br>Caleb Teller</td>
                                        <td>Advanced</td>
                                        <td>Wed, May 6th, 2020 4:30AM</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td></td>
                                        <td>
                                            <a href="register.php?id=1" class="btn btn-primary">Go to Register</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kim Sinclair<br>Jenny Hoaly<br>Caleb Teller</td>
                                        <td>Intermediate</td>
                                        <td>Wed, May 6th, 2020 9:00AM</td>
                                        <td>9</td>
                                        <td>0</td>
                                        <td>9</td>
                                        <td></td>
                                        <td>
                                            <a href="register.php?id=2" class="btn btn-primary">Go to Register</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Elys Johnston<br>Summer Davies<br>Caleb Teller</td>
                                        <td>Main Team Level 3</td>
                                        <td>Wed, May 6th, 2020 5:00PM</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>Void</td>
                                        <td>
                                            <a href="register.php?id=3" class="btn btn-primary">Go to Register</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Elodie Fagan<br>Johannes Bias<br>Felicity Evans</td>
                                        <td>Men's Team</td>
                                        <td>Wed, May 6th, 2020 5:00PM</td>
                                        <td>9</td>
                                        <td>0</td>
                                        <td>9</td>
                                        <td></td>
                                        <td>
                                            <a href="register.php?id=4" class="btn btn-primary">Go to Register</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

<script>
function exportToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    doc.setFontSize(18);
    doc.text("Attendance Registers", 14, 22);
    
    doc.autoTable({ 
        html: '#attendance-table',
        startY: 30,
        styles: { fontSize: 10 },
        // Exclude the last column (Action) from the PDF export
        didParseCell: function(data) {
            if (data.column.index === 7) {
                data.cell.styles.fillColor = null; // Prevents the action column from being included
                data.cell.styles.textColor = [255, 255, 255]; // Set text color to white
            }
        }
    });
    
    doc.save('attendance_registers.pdf');
}

function exportToExcel() {
    const table = document.getElementById('attendance-table');
    const wb = XLSX.utils.table_to_book(table, { sheet: "Attendance" });
    // Remove the Action column from the Excel export
    const ws = wb.Sheets["Attendance"];
    delete ws[`H1`]; // Remove header for Action column
    for (let i = 2; ; i++) {
        if (ws[`H${i}`]) {
            delete ws[`H${i}`]; // Remove each cell in the Action column
        } else {
            break;
        }
    }
    XLSX.writeFile(wb, 'attendance_registers.xlsx');
}

function exportToCSV() {
    const table = document.getElementById('attendance-table');
    const csv = XLSX.utils.table_to_csv(table);
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement("a");
    const url = URL.createObjectURL(blob);
    link.setAttribute("href", url);
    link.setAttribute("download", "attendance_registers.csv");
    link.style.visibility = 'hidden';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>

</body>
</html>
