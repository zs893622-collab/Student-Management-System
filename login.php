<?php
session_start();
include("includes/db_connect.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login-box{
            width:400px;
            margin:80px auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
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
            color:#fff;
            border:none;
            cursor:pointer;
        }
        .error{
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>

<header>
    <h1>Admin Login</h1>
</header>

<div class="login-box">

<?php
if(isset($error))
{
    echo "<p class='error'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">
Login
</button>

</form>

</div>

</body>
</html>