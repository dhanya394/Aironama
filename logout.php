<?php
session_start();
session_destroy();
if(isset($_COOKIE["user"]) and isset($_COOKIE["pass"]))
{
$user=$_COOKIE["user"];
$pass=$_COOKIE["pass"];
setcookie('user', $user, time()-1);
setcookie('pass', $pass, time()-1);
}
echo "You have succesfully logged out! Click here to <a href='login.php'> login again <a>";
?>