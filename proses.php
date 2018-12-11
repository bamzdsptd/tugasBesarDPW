<?php

session_start();
include 'koneksi.php';

if (isset($_POST['login']))
    {
    $username=$_POST['username'];
    $password=$_POST['password'];
    }

$gagal = "";
$error = array();
if (empty($username))
    {$error['username'] = "Username salah";}
else
    {$error['username'] = "";}
if (empty($password))
    {$error['password'] = "Password salah";}
else
    {$error['password'] = "";}
   
if (!empty($username) and !empty($password))
    {
    $query=mysqli_query($link,"select * from users where username='$username' and password='$password'");
    $xxx=mysqli_num_rows($query);
    if($xxx==TRUE){
        $_SESSION['username']=$username; 
        header("location:welcome.php");   
        }
        else
        {  
            $gagal = "username atau password salah";
        }
    }
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">     
</head>
<body>
    <div id="kotakloginsalah">
    <div id="atas">LOGIN ADMINISTRATOR</div>
    <div id="bawah">
        <form method="post" action="proses.php">
        <input class="masuk" type="text" autocomplete="off" placeholder="Username .." name="username" ><br/>
        <p style="color: red; text-align: center;"><?php echo ($error['username']);?></p>
        <input class="masuk" type="password" autocomplete="off" placeholder="Password .." name="password"><br/>
        <p style="color: red; text-align: center;"><?php echo ($error['password']);?></p>
        <p style="color: red; text-align: center;"><?php echo $gagal;?></p>
        <input id="tombol" type="submit" name="login" value="Login">
        <p  style = "margin-left: 60px">
		    Not yet a member? <a href="register.php">Sign up</a>
	    </p>
        </form>   
    </div>
    </div>
</body>

</html>