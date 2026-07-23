<?php
include("includes/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <h1>Student Management System</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="dashboard.php">
            Student Management System
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="add_student.php">Add Student</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="view_students.php">View Students</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="search_student.php">Search Student</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container mt-5 text-center">

    <h2>Welcome to Student Management System</h2>

    <p>
        This project is developed using HTML, CSS, PHP, MySQL, and XAMPP.
    </p>

    <a href="dashboard.php" class="btn btn-primary">
        Go to Dashboard
    </a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>