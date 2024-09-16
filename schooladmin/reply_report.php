<?php
include('include/header.php');

$id = $_SESSION['id'];
$space = " ";
$data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
$row = mysqli_fetch_array($data);
$sender_name = $row['firstname'] . $space . $row['lastname'];

if (isset($_POST['replysubmit'])) {
    $reply = $_POST['content'];
    $status = 'Replied';
    $reply_date = $_POST['reply_date'];
    $repliedby = 'Principal';


    $report_id = $_GET['id'];
    $data = mysqli_query($sql_con, "UPDATE report SET reply='$reply',repliedby='$repliedby',reply_date='$reply_date',status='$status' Where id= $report_id");
    if ($data) {
        echo "<script>alert('Reply Sent Successfully!!')</script>";
        echo "<script>window.location='report_list.php';</script>";
    } else {
        echo "Failed:" . mysqli_error($conn);
    }
}

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Reply Report</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb"><a href="report_list.php">Report/</a></li>
                        <li class="breadcrumb-item active">Reply Report</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        $query = "SELECT * FROM report WHERE sender_rank = 'Parent'; ";
        $result = mysqli_query($sql_con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <h5 class="form-title"><span><b>Reply For:</b> <?php echo $row['title'] ?></span></h5>
                                </div>
                                <div class="col-auto">
                                   <b> By:</b><?php if ($row['sender_rank'] == 'Teacher') { ?>
                                    <span class="badge bg-success-dark"><?php echo $row['sender_rank'] ?></span>
                             <?php   } 
                          elseif ($row['sender_rank'] == 'Parent') { ?>
                            <span class="badge bg-secondary-dark"><?php echo $row['sender_rank'] ?></span>
                            <?php }
                             ?>
                                </div>
                            <?php
        }
            ?>
            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Message <span class="login-danger">*</span></label>
                                        <input type="text" name="content" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="val-name" name="reply_date" value="<?php echo date("F j, Y"); ?>">
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" name="replysubmit" class="btn btn-primary">Reply</button>
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
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>