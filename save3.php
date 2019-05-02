<?php
$msg='';
$id2='';
if(isset($_POST['signin']) && isset($_POST['username']) && isset($_POST['password']))
{
  $con = mysqli_connect('localhost', 'root','');
    if($con)
      echo "connected";
    $db = mysqli_select_db($con,'airlinedb');
    if($db)
      echo "ready";
//include'save.php';  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id1 = $_POST['username'];
    $pass1=$_POST['password'];


$sql="select username,password from registerdb where username='$id1' and password='$pass1';";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $id2=$row['username'];
    $pass2=$row['password'];
    //echo $id2.$pass2;
    
}
if ($id1==$id2 && $pass1==$pass2 ) 
    {
    
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['user'] = $id2;
        
        header("location:book.php");
    }
    else
    {
        $msg='Invalid Username or Password';
    
    }
  }
  else{
      echo"Fill username";     
  } 
}
echo "error";
?>