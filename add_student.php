<?php
include("includes/db_connect.php");

if(isset($_POST['save_student']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name,email,phone,course)
              VALUES('$name','$email','$phone','$course')";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script>alert('Student Added Successfully!');</script>";
    }
    else
    {
        echo "<script>alert('Failed to Add Student!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Student</title>

<link rel="stylesheet" href="css/style.css">

<style>
form{
    width:500px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
}

button{
    width:100%;
    padding:12px;
    background:#0d6efd;
    color:white;
    border:none;
    cursor:pointer;
    font-size:16px;
}
</style>

</head>
<body>

<header>
<h1>Student Management System</h1>
</header>

<form method="POST">

<h2>Add Student</h2>

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="text" name="phone" placeholder="Enter Phone" required>

<input type="text" name="course" placeholder="Enter Course" required>

<button type="submit" name="save_student">
Add Student
</button>

</form>

</body>
</html>