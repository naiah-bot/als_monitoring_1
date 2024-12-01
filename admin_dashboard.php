<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Fetch user details from session
$surname = $_SESSION['lastName'] ?? 'lastName';
$firstName = $_SESSION['firstName'] ?? 'firstName';
$userType = $_SESSION['user_type'] ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin-dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="als-logo.svg" alt="Logo" />
        </div>
        <h1>ALTERNATIVE LEARNING SYSTEM - BUENAVISTA CHAPTER</h1>
    </header>
    <div class="container">
        <div class="navigation" id="navigationDrawer">
            <ul>
                <li>
                    <span class="profile_icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <div class="profile-details">
                        <h2><?php echo "$surname, $firstName"; ?></h2>
                        <p><?php echo ucfirst($userType); ?></p>
                    </div>
                </li>
                <li>
                    <a href="admin_dashboard.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admin_attendance.php">
                        <span class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                        <span class="title">Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="admin_l-materials.php"> 
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title">Learning Materials</span>
                    </a>
                </li>
                <li>
                    <a href="admin_l-materials.php"> 
                        <span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>                    
                        <span class="title">Student Registration</span>
                    </a>
                </li>
                <li>
                    <a href="admin_student-list.php">
                        <span class="icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                        <span class="title">List of Students</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="confirmLogout()">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content">
    <div id="rectangle-container">
        <div class="status-rectangle">
            <div class="status-icon">
                <i class="fa fa-calendar-check-o"></i>
            </div>
            <p>View Attendance Record</p>
        </div>
        <div class="status-rectangle">
            <div class="status-icon">
                <i class="fa fa-book"></i>
            </div>
            <p>View Learning Materials Record</p>
        </div>
        <div class="status-rectangle">
            <div class="status-icon">
                <i class="fa fa-user"></i>
            </div>
            <p>Student Registration</p>
        </div>
        <div class="status-rectangle">
            <div class="status-icon">
                <i class="fa fa-list"></i>
            </div>
            <p>List of Students Information</p>
        </div>
    </div>
</div>


    </div>
    
    <script>
        function confirmLogout() {
            if (confirm("Are you sure you want to log out?")) {
                window.location.href = "logout.php";  // Redirect to logout.php
            }
        }
    </script>
</body>
</html>
