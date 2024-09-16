<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Parent</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
                            <li class="breadcrumb-item active">Parent</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="student-group-form"> -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" id="search-input" class="form-control" placeholder="Search by ID, Name, or Phone...">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="form-group">
                        <select id="show-entries" class="form-control">
                            <option value="10">Show 10</option>
                            <option value="25">Show 25</option>
                            <option value="50">Show 50</option>
                            <option value="100">Show 100</option>
                        </select>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body" id="parentdownload">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Student</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-outline-primary me-2" id="downloadPDF"><i class="fas fa-download"></i> PDF</a>
                                    <a href="#" class="btn btn-outline-primary me-2" id="downloadCSV"><i class="fas fa-download"></i> CSV</a>
                                    <a href="#" class="btn btn-outline-primary me-2" id="downloadExcel"><i class="fas fa-download"></i> Excel</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" id="example1">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>ID No</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
                                    $row = mysqli_fetch_array($data);
                                    $school_id = $row['school_id'];
                                    $query = "select * from student WHERE school_id =$school_id";
                                    $result = mysqli_query($sql_con, $query);
                                    ?>
                                    <tr>
                                        <?php

                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <tr>

                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['firstname']; ?>
                                            <?php echo $row['lastname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['class']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['dob']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['homeaddress']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['phonenumber']; ?>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="add_parent.php?student_id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View" data-target="#viewthreeModaldep" class="btn btn-sm bg-success-light me-2"><i class="fa fa-eye"></i></a>
                                                <a href="add_parent.php?student_id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="Parent Info" data-target="#viewthreeModaldep" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                ?>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2022 DigiSal.</p>
    </footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.2/html2pdf.bundle.min.js"></script>
<script>
    window.onload = function() {
        document.getElementById("download").addEventListener('click', () => {
            const parentdownload = document.getElementById('parentdownload');
            console.log(parentdownload); // This will log the element itself
            console.log(window); // This will log the window object

            // Assuming html2pdf() is properly defined and available
            html2pdf().from(parentdownload).save();
        });
    };
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        })
function search_table(value) {
    $('#example1 tr').each(function(){
        var found = 'false'
        $(this).each(function() {
            if ($(this).text().toLocaleLowerCase().indexOf(value.toLocaleLowerCase())>=0) {
                found = 'true';
            }
        });
        if (found=='true') {
            $(this).show();
        }else{
            $(this).hide;   
        }
    })
}

    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const showEntries = document.getElementById('show-entries');
    const tableBody = document.querySelector('tbody');
    let debounceTimer;

    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const searchTerm = this.value.toLowerCase();
            const rows = tableBody.querySelectorAll('tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        }, 300);
    });

    showEntries.addEventListener('change', function() {
        const limit = parseInt(this.value);
        const rows = tableBody.querySelectorAll('tr');
        
        rows.forEach((row, index) => {
            row.style.display = index < limit ? '' : 'none';
        });
    });

    document.getElementById("downloadPDF").addEventListener('click', exportToPDF);
    document.getElementById("downloadCSV").addEventListener('click', exportToCSV);
    document.getElementById("downloadExcel").addEventListener('click', exportToExcel);
});

function exportToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    doc.autoTable({ html: '#example1 table' });
    doc.save('parent_info.pdf');
}

function exportToCSV() {
    const table = document.querySelector('#example1 table');
    const rows = table.querySelectorAll('tr');
    let csv = [];
    for (const row of rows) {
        const cells = row.querySelectorAll('td, th');
        const rowData = Array.from(cells).map(cell => cell.textContent);
        csv.push(rowData.join(','));
    }
    downloadCSV(csv.join('\n'), 'parent_info.csv');
}

function downloadCSV(csv, filename) {
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    if (navigator.msSaveBlob) {
        navigator.msSaveBlob(blob, filename);
    } else {
        link.href = URL.createObjectURL(blob);
        link.download = filename;
        link.click();
    }
}

function exportToExcel() {
    const table = document.querySelector('#example1 table');
    const wb = XLSX.utils.table_to_book(table, {sheet: "Parent Info"});
    XLSX.writeFile(wb, 'parent_info.xlsx');
}
</script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->

</html>
</html>