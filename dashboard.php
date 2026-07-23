<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include("includes/db_connect.php");

$query = "SELECT * FROM students";
$query_run = mysqli_query($conn, $query);
$total_students = mysqli_num_rows($query_run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link rel="stylesheet" href="css/style.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
min-height:100vh;
}

header{
background:#0d6efd;
padding:20px;
text-align:center;
color:white;
font-size:32px;
font-weight:bold;
box-shadow:0 5px 10px rgba(0,0,0,.3);
}

.container{
width:90%;
margin:40px auto;
text-align:center;
}

.card{
width:380px;
margin:auto;
padding:30px;
border-radius:15px;
background:white;
box-shadow:0 10px 25px rgba(0,0,0,.3);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card h2{
color:#0d6efd;
margin-bottom:10px;
}

.card h1{
font-size:55px;
color:#198754;
margin:15px 0;
}

.card p{
font-size:18px;
color:#555;
}

.menu{
margin-top:40px;
display:flex;
justify-content:center;
flex-wrap:wrap;
gap:20px;
}

.menu a{
text-decoration:none;
background:#0d6efd;
color:white;
padding:15px 30px;
border-radius:8px;
font-size:18px;
font-weight:bold;
transition:.3s;
box-shadow:0 5px 10px rgba(0,0,0,.2);
}

.menu a:hover{
background:#198754;
transform:scale(1.05);
}

.footer{
margin-top:60px;
text-align:center;
color:white;
font-size:16px;
}

</style>

</head>

<body>

<header>
🎓 Student Management Dashboard
</header>

<div class="container">

<div class="card">

<h2>Welcome Admin 👋</h2>

<hr><br>

<h3>Total Students</h3>

<h1><?php echo $total_students; ?></h1>

<p>📅 <?php echo date("d F Y"); ?></p>

<p>🕒 <?php echo date("h:i A"); ?></p>

</div>

<div class="menu">

<a href="add_student.php">➕ Add Student</a>

<a href="view_students.php">📋 View Students</a>

<a href="search_student.php">🔍 Search Student</a>

<a href="logout.php">🚪 Logout</a>

</div>

<div class="footer">
Developed by <b>Zaheer Shaikh</b> | © <?php echo date("Y"); ?>
</div>

</div>

</body>
</html>