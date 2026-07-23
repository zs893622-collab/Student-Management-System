<?php
include("includes/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .container{
            width:90%;
            margin:30px auto;
        }

        form{
            margin-bottom:20px;
            text-align:center;
        }

        input{
            width:300px;
            padding:10px;
        }

        button{
            padding:10px 20px;
            background:#0d6efd;
            color:white;
            border:none;
            cursor:pointer;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        table,th,td{
            border:1px solid #ddd;
        }

        th{
            background:#0d6efd;
            color:white;
            padding:10px;
        }

        td{
            padding:10px;
            text-align:center;
        }
    </style>
</head>
<body>

<header>
    <h1>Search Student</h1>
</header>

<div class="container">

<form method="GET">
    <input type="text" name="search" placeholder="Enter student name">
    <button type="submit">Search</button>
</form>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
</tr>

<?php

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $query = "SELECT * FROM students WHERE name LIKE '%$search%'";
}
else
{
    $query = "SELECT * FROM students";
}

$query_run = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($query_run))
{
?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['phone']; ?></td>
    <td><?= $row['course']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>