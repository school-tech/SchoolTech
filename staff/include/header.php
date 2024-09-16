<?php
include('dbcon.php');
include('session.php');



?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/template/indexhtml by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ScholTech | Staff</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="view_staff.php" class="logo">
                    <img src="assets/img/stlogo1.png" alt="Logo">
                </a>
                <a href="view_staff.php" class="logo logo-small">
                    <img src="assets/img/stlogo1.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search" style="margin: 15px; padding-left: 50px">
                <h3 class="page-title" style="font-size: 25px">Staff Panel</h3>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/cavatar.png" width="31" alt="Ryan Taylor">
                            <div class="user-text">
                                <h6><?php $id = $_SESSION['id'];

                                    $data = mysqli_query($sql_con, "select * from teacher where id = '$id' ");
                                    $row = mysqli_fetch_array($data); ?></h6>
                                <h6>Mr <?php echo $row['lastname'];?></h6>
                                <p class="text-muted mb-0"> <?php echo $row['schoolname'];?></p>
                                
                                <!-- <p class="text-muted mb-0"><?php //echo $row['schoolname']; ?></p> -->
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li>
                            <a href="view_staff.php"><i class="feather-grid"></i> <span> Home</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span>Attendance</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="attendance.php">Student List</a></li>
                                <li><a href="add_attendance.php">Mark Attendance</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-book"></i> <span>Curriculum</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="syllabus.php">Syllabus</a></li>
                                <li><a href="add_topic.php">Add Topic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-file"></i> <span>Grades</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="report_list.php">Student List</a></li>
                                <li><a href="report.php">My Grades</a></li>
                                <li><a href="add_report.php">Add Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard-list"></i> <span> Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="report_list.php">Report List</a></li>
                                <li><a href="report.php">My Reports</a></li>
                                <li><a href="add_report.php">Add Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>