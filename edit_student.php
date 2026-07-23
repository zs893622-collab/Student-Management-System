<?php
include("includes/db_connect.php");

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id='$id'";
$query_run = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($query_run);

if(isset($_POST['update_student']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];

    $update_query="UPDATE students
    SET
    name='$name',
    email='$email',
    phone='$phone',
    course='$course'
    WHERE id='$id'";

    $update_run=mysqli_query($conn,$update_query);

    if($update_run)
    {
        header("Location:view_students.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Student</title>

<link rel="stylesheet" href="css/style.css">

<style>

form{
width:500px;
margin:40px auto;
background:white;
padding:30px;
border-radius:10px;
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

}

</style>

</head>

<body>

<header>

<h1>Edit Student</h1>

</header>

<form method="POST">

<input type="text"
name="name"
value="<?php echo $row['name']; ?>"
required>

<input type="email"
name="email"
value="<?php echo $row['email']; ?>"
required>

<input type="text"
name="phone"
value="<?php echo $row['phone']; ?>"
required>

<input type="text"
name="course"
value="<?php echo $row['course']; ?>"
required>

<button
type="submit"
name="update_student">

Update Student

</button>

</form>

</body>

</html>