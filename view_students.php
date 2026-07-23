<?php
include("includes/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Students</title>

<link rel="stylesheet" href="css/style.css">

<style>
table{
    width:90%;
    margin:30px auto;
    border-collapse:collapse;
    background:white;
}

table, th, td{
    border:1px solid #ddd;
}

th{
    background:#0d6efd;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    text-align:center;
}

h2{
    text-align:center;
    margin-top:20px;
}
</style>

</head>
<body>

<header>
<h1>Student Management System</h1>
</header>

<h2>Student Records</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php

$query = "SELECT * FROM students";
$query_run = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query_run))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>

<a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_student.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this student?')">
Delete
</a>

</td>

</tr>

<?php
}
?>