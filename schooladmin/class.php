<?php
include('include/header.php');

$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);

?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Class</h3>
<ul class="breadcrumb">
<li class="breadcrumb"><a href="view_staff.php">Staff/</a></li>
<li class="breadcrumb-item active">Class</li>
</ul>
</div>
</div>
</div>

<div class="student-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Year ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body" id="classdownload">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Class</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<button class="btn btn-outline-primary me-2" id="download"><i class="fas fa-download"> Download</i></button>
<a href="add_class.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>Name</th>
<th>Class Master</th>
<th>Location</th>
<th>Academic Year</th>
<th>No of Students</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<?php
$id = $_SESSION['id'];
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$school_id = $row['school_id'];
                        $query = "SELECT * FROM class WHERE school_id = $school_id";
                    $result = mysqli_query($sql_con, $query);
                    ?>
 <tr>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['classname']; ?>
                                </td>
                                <td>
                                    <?php echo $row['classmaster']; ?>
                                </td>
                                <td>
                                    <?php echo $row['location']; ?>
                                </td>
                                <td>
                                    <?php echo $row['batch']; ?>
                                </td>
                                <td>
                                    <?php echo '60'; ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="sold.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-sm bg-success-light me-2"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="edit_class.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-sm bg-danger-light"><i
                                            class="feather-edit"></i></a>
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
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2024 SchoolTech.</p>
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
            const classdownload = document.getElementById('classdownload');
            console.log(classdownload); // This will log the element itself
            console.log(window); // This will log the window object

            // Assuming html2pdf() is properly defined and available
            html2pdf().from(classdownload).save();
        });
    };
</script>
</body>

</html>