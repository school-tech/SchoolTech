<?php
include('dbcon.php');
include('session.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ScholTech | School Admin</title>

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
                    <img src="assets/img/stlogo1.png" width="10000" height="10000" alt="Logo">
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
                <h3 class="page-title" style="font-size: 25px">School Admin Panel</h3>
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

                                    $data = mysqli_query($sql_con, "select * from schooladmin where id = '$id' ");
                                    $row = mysqli_fetch_array($data); ?></h6>
                                <h6><?php
                                if ($row['gender'] == 'Male') {
                                    echo "Mr"; echo ' '; echo $row['adminname']; 
                                }
                                else {
                                    echo 'Mrs'; echo ' '; echo $row['adminname'];
                                }
                                ?></h6>
                                <p class="text-muted mb-0"><?php echo $row['schoolname']; ?></p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="index.php">Logout</a>
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
                            <a href="view_staff.php"><i class="feather-grid"></i> <span>Home</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="add_student.php">Add Student</a></li>
                                <li><a href="parent_info.php">Parent Info</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <!-- <li><a href="teacher-details.html">Teacher View</a></li> -->
                                <li><a href="add_teacher.php">Add Teacher </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Class</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="class.php">Class List</a></li>
                                <li><a href="add_class.php">Add Class</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">Subject List</a></li>
                                <li><a href="add_subject.php">Add Subject</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Results</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">First Term</a></li>
                                <li><a href="add_subject.php">Second Term</a></li>
                                <li><a href="add_subject.php">Third Term</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="report_list.php">Report List</a></li>
                                <li><a href="report.php">My Reports</a></li>
                                <li><a href="add_report.php">Add Report</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="timetable.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="transfer.php"><i class="fas fa-hotel"></i> <span>Transfer</span></a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
 const submenus = document.querySelectorAll('.sidebar-menu .submenu');

// Loop through each submenu
submenus.forEach(submenu => {
    // Get the direct child anchor tag of each submenu
    const submenuLink = submenu.querySelector('a');

    // Add click event listener to the direct child anchor tag
    submenuLink.addEventListener('click', () => {
        // Remove "active" class from all submenu items
        submenus.forEach(item => {
            item.classList.remove('active');
        });

        // Add "active" class to the clicked submenu item
        submenu.classList.add('active');
    });
});
    </script>
</body>

</html>