<form action="s1.php" method="post">
<?php
$user = "abdu";
$pass = "123456";

if(isset($_POST['submit']))
{

    if ($_POST['user'] == $user && $_POST['pass'] == $pass)
    {
        
        
     session_start();
     $_SESSION["chek"] = "chek";
     header("location:http://localhost/0.7/session/s2.php");
    }
    else
    {
       echo "wrog user or pass word ";
    }

} 
?>
<input type="text" name="user" id="user" placeholder="user">
<input type="password" name="pass" id="pass" placeholder="pass">
<input type="submit" name ="submit">
</form>