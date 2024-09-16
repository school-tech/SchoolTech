<?php
include('include/header.php');
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Attendance</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb"><a href="attendance.php">Attendance/</a></li>
                            <li class="breadcrumb-item active">Add Attendance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form method="POST" action="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name 1</td>
                                        <td><input type="time" class="form-control" name="time_in_1" required></td>
                                        <td><input type="time" class="form-control" name="time_out_1" required></td>
                                    </tr>
                                    <tr>
                                        <td>Name 2</td>
                                        <td><input type="time" class="form-control" name="time_in_2" required></td>
                                        <td><input type="time" class="form-control" name="time_out_2" required></td>
                                    </tr>
                                    <tr>
                                        <td>Name 3</td>
                                        <td><input type="time" class="form-control" name="time_in_3" required></td>
                                        <td><input type="time" class="form-control" name="time_out_3" required></td>
                                    </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-primary">Submit Attendance</button>
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
