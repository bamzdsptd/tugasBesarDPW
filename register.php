<?php include('functions.php') ?>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">     
</head>
<body>
    
    <div id="kotaksignup">
    <div id="atas">SIGN UP</div>
    <div id="bawah">
   
    <form method="post" action="register.php">
    <?php include('errors.php') ?>
    <input class="masuk" type="text" autocomplete="off" placeholder="Username .." name="username"><br/>
    <input class="masuk" type="text" autocomplete="off" placeholder="Email .." name="email"><br/>
    <input class="masuk" type="password" autocomplete="off" placeholder="Password .." name="password"><br/>
    <input class="masuk" type="password" autocomplete="off" placeholder="Confirm Password .." name="password2"><br/>
    <input id="tombol" type="submit" name="reg_user" value="REGISTER">
    <p  style = "margin-left: 60px">
		Have account ? <a href="login.php">Login</a>
	</p>
    </form>
   
    </div>
    </div>
</body>

</html>