<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "SELECT schooladmin.*, school.school_name FROM schooladmin JOIN school ON schooladmin.school_id = school.school_id WHERE schooladmin.id = '$id'");
$row = mysqli_fetch_array($data);
$school_name = $row['school_name'];
$school_id = $row['school_id'];
$admin_image = $row['image'];

// Search functionality
$search = isset($_GET['search']) ? mysqli_real_escape_string($sql_con, $_GET['search']) : '';

// Pagination
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$records_per_page = isset($_GET['show']) ? intval($_GET['show']) : 10;
$offset = ($page - 1) * $records_per_page;

$where_clause = "WHERE school_id = $school_id";
if (!empty($search)) {
    $where_clause .= " AND (id LIKE '%$search%' 
                      OR firstname LIKE '%$search%' 
                      OR lastname LIKE '%$search%'
                      OR faculty LIKE '%$search%'
                      OR phonenumber LIKE '%$search%')";
}

// Count total records for pagination
$count_query = "SELECT COUNT(*) as total FROM teacher $where_clause";
$count_result = mysqli_query($sql_con, $count_query);
$count_row = mysqli_fetch_assoc($count_result);
$total_records = $count_row['total'];
$total_pages = ceil($total_records / $records_per_page);

// Main query with LIMIT for pagination
$query = "SELECT * FROM teacher $where_clause LIMIT $offset, $records_per_page";
$result = mysqli_query($sql_con, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($sql_con));
}
?>

<!-- Add these in the <head> section or at the top of your file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

<!-- Add this style in the <head> section or in your CSS file -->
<style>
    .admin-image {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="menu-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">All Teachers</li>
</ul>
</div>
</div>
</div>
</div>

<div class="student-group-form">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="form-group">
                <input type="text" id="search-input" class="form-control" placeholder="Search by ID, Name, or Phone..." value="<?php echo htmlspecialchars($search); ?>">
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="form-group">
                <select id="show-entries" class="form-control">
                    <option value="10" <?php echo $records_per_page == 10 ? 'selected' : ''; ?>>Show 10</option>
                    <option value="25" <?php echo $records_per_page == 25 ? 'selected' : ''; ?>>Show 25</option>
                    <option value="50" <?php echo $records_per_page == 50 ? 'selected' : ''; ?>>Show 50</option>
                    <option value="100" <?php echo $records_per_page == 100 ? 'selected' : ''; ?>>Show 100</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<button onclick="exportToPDF()" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Export to PDF</button>
<button onclick="exportToExcel()" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Export to Excel</button>
<button onclick="exportToCSV()" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Export to CSV</button>
<a href="add_teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="teacher-table">
<thead class="student-thread">
<tr>
<th>ID No</th>
<th>Name</th>
<th>Faculty</th>
<th>DOB</th>
<th>Address</th>
<th>Phone Number</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody id="teacher-table-body">
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo htmlspecialchars($row['id']); ?></td>
<td><?php echo htmlspecialchars($row['firstname'] . ' ' . $row['lastname']); ?></td>
<td><?php echo htmlspecialchars($row['faculty']); ?></td>
<td><?php echo htmlspecialchars($row['dob']); ?></td>
<td><?php echo htmlspecialchars($row['homeaddress']); ?></td>
<td><?php echo htmlspecialchars($row['phonenumber']); ?></td>
<td>
<div class="d-flex">
<a href="view_teacher.php?id=<?php echo urlencode($row['id']); ?>" data-tooltip="tooltip" title="View" class="btn btn-sm bg-success-light me-2"><i class="fa fa-eye"></i></a>
<a href="edit_teacher.php?id=<?php echo urlencode($row['id']); ?>" data-tooltip="tooltip" title="Edit" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
</div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>

<!-- Pagination -->
<div class="row">
    <div class="col-sm-12">
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous <?php echo ($page <= 1) ? 'disabled' : ''; ?>" id="DataTables_Table_0_previous">
                    <a href="?page=<?php echo $page - 1; ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $records_per_page; ?>" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
                <?php
                $start_page = max(1, $page - 2);
                $end_page = min($total_pages, $page + 2);

                if ($start_page > 1) {
                    echo '<li class="paginate_button page-item"><a href="?page=1&search=' . urlencode($search) . '&show=' . $records_per_page . '" class="page-link">1</a></li>';
                    if ($start_page > 2) {
                        echo '<li class="paginate_button page-item disabled"><span class="page-link">...</span></li>';
                    }
                }

                for ($i = $start_page; $i <= $end_page; $i++) {
                    echo '<li class="paginate_button page-item ' . ($page == $i ? 'active' : '') . '">
                            <a href="?page=' . $i . '&search=' . urlencode($search) . '&show=' . $records_per_page . '" aria-controls="DataTables_Table_0" data-dt-idx="' . $i . '" tabindex="0" class="page-link">' . $i . '</a>
                          </li>';
                }

                if ($end_page < $total_pages) {
                    if ($end_page < $total_pages - 1) {
                        echo '<li class="paginate_button page-item disabled"><span class="page-link">...</span></li>';
                    }
                    echo '<li class="paginate_button page-item"><a href="?page=' . $total_pages . '&search=' . urlencode($search) . '&show=' . $records_per_page . '" class="page-link">' . $total_pages . '</a></li>';
                }
                ?>
                <li class="paginate_button page-item next <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>" id="DataTables_Table_0_next">
                    <a href="?page=<?php echo $page + 1; ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $records_per_page; ?>" aria-controls="DataTables_Table_0" data-dt-idx="<?php echo $total_pages + 1; ?>" tabindex="0" class="page-link">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2022 SchoolTech.</p>
</footer>

</div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const showEntries = document.getElementById('show-entries');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const limit = parseInt(showEntries.value);
        window.location.href = 'teachers.php?search=' + encodeURIComponent(searchTerm) + '&show=' + limit + '&page=1#teacher-table-body';
    }

    searchInput.addEventListener('input', function() {
        clearTimeout(this.debounceTimer);
        this.debounceTimer = setTimeout(filterTable, 300);
    });

    showEntries.addEventListener('change', filterTable);

    if (window.location.hash) {
        const element = document.querySelector(window.location.hash);
        if (element) {
            element.scrollIntoView();
        }
    }
});

function exportToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    const schoolName = <?php echo json_encode($school_name); ?>;
    doc.setFontSize(18);
    doc.text(schoolName, doc.internal.pageSize.width / 2, 20, { align: 'center' });
    
    doc.setFontSize(14);
    doc.text("Teacher List", doc.internal.pageSize.width / 2, 30, { align: 'center' });
    
    const today = new Date();
    doc.setFontSize(12);
    doc.text(`Date: ${today.toLocaleDateString()}`, doc.internal.pageSize.width / 2, 40, { align: 'center' });
    
    doc.autoTable({ 
        html: '#teacher-table',
        startY: 50,
        styles: { fontSize: 8 },
        columnStyles: { 0: { cellWidth: 20 } },
        columns: [
            { header: 'ID No', dataKey: 'id' },
            { header: 'Name', dataKey: 'name' },
            { header: 'Faculty', dataKey: 'faculty' },
            { header: 'DOB', dataKey: 'dob' },
            { header: 'Address', dataKey: 'address' },
            { header: 'Phone Number', dataKey: 'phone' }
        ],
        didParseCell: function(data) {
            if (data.column.dataKey === 6) {
                return false;
            }
        }
    });
    
    doc.save('teachers.pdf');
}

function exportToExcel() {
    const table = document.querySelector('#teacher-table');
    const wb = XLSX.utils.table_to_book(table, {sheet: "Teachers"});
    if (wb.Sheets.Teachers['G1']) {
        delete wb.Sheets.Teachers['G1'];
    }
    for (let i = 2; ; i++) {
        if (wb.Sheets.Teachers['G' + i]) {
            delete wb.Sheets.Teachers['G' + i];
        } else {
            break;
        }
    }
    XLSX.writeFile(wb, 'teachers.xlsx');
}

function exportToCSV() {
    const table = document.querySelector('#teacher-table');
    const wb = XLSX.utils.table_to_book(table, {sheet: "Teachers"});
    if (wb.Sheets.Teachers['G1']) {
        delete wb.Sheets.Teachers['G1'];
    }
    for (let i = 2; ; i++) {
        if (wb.Sheets.Teachers['G' + i]) {
            delete wb.Sheets.Teachers['G' + i];
        } else {
            break;
        }
    }
    XLSX.writeFile(wb, 'teachers.csv');
}
</script>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>