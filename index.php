<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Delta Sigma Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Delta Sigma Login</h1>
<div id="login">
<form action="" method="post">
<label>Username :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
<input type="submit" value=" Register " onClick="window.location = 'registration.php';">
</div>
<div id="updates">
<h3>Recent Updates</h3>
<b>11/17/16</b><br>
- Finished implementing sessions<br>
- Users now need to login before they can navigate via URL<br>
- Styling updates<br>
</div>
</div>

</body>
</html>
