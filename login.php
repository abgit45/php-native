<?php
session_start();
if(isset($_SESSION['chek'])) 
{
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel ="stylesheet" herf = "insert.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<button class="btn btn-info" onclick="myFunction()" src="http://localhost/0.7/">deconéction</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "<?php session_destroy(); ?>"
}
</script>

<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
include ("config.php");


                                      
 
 

?>

  
  <!--
 <form action ="index.php" method="POST">
 <input class="ab" type="submit" name="submit" > 
 <input  class="ac" type="userName" name="user" value = "" >
<input  class="ad" type="password" name="pass" value = "" >
<input  class="ae" type="email" name="email"  value = "" >
 <input  class="af" type="telnum" name="telnum" value = "" >
 </form>


!-->

<?php




//get data for delate
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
if (!empty($_POST['pid'])) {
  

  $id = $_POST['pid'];
 
  
  $sql="DELETE FROM users  WHERE id = '$id'";

  $data = mysqli_query($conn,$sql);
  if ($data) {
    echo "<font color='green'> the row number $id  has been delated correctely"  ; 
    
    header("Refresh:2;url= https://localhost/0.7/login.php");
  }else
  {
      echo "<font color='red'>is a error in your delete".mysqli_error($conn);
  }
  
}



?>

 <link rel="stylesheet" href="style4.css">
 <div class="container">
<?php
$sql = "SELECT * FROM users,images";

$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
    
//echo $rowcount;
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
  $x=0;
  
  ?>
<div class="row">
    <a href="insert.php" class="btn btn-primary"> Add user</a>
</div>
<div class="row">
      <table>
      <thead>
        <tr>
          <th>image</th>
          <th>id</th>
          <th>username</th>
          <th>password</th>
          <th>email</th>
          <th>telnum</th>
          <th>delete</th>
          <th>edite</th>
              
     
  </tr>
      </thead>
      <tbody>

      <?php
      while ($x <= $rowcount)
      {

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        

      if ($row) {
        ?>
        <tr>
          <form action="login.php" method="POST">
                <?php 
                $id = $row['id']; 
                 $extention = $row['extention']; 
                 $user = $row['username']; 
                 $pass = $row['password']; 
                 $em = $row['email']; 
                 $tel = $row['telnum']; 
                 $hasimg = $row ['has_img'];

                ?>
                                        
                <td> 
                  <?php
                  if($hasimg == 0) 
                  {
            $img = "nophoto";
                  }
                  else
           $img = $id;
                  {
                    ?>  
                    <img src="upload/<?php echo $img.".png"; ?>" width="40px" height="40px"> 
                    
                    <?php
                  }
                   ?> 
                  
                 
                                         
      </td> 
                <td><?php echo $id; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $pass; ?></td>
                <td><?php echo $em ?></td>
                <td><?php echo $tel ?></td>
                <td> 
                  <button class="btn btn-danger" name="delete">Supp </button> 
                  <input type="hidden" name="pid" value="<?php echo $id;?>">
                </td>
  
          </form>
          <td> 
            <form action="up.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            </form>
            <form action="edit.php" method="POST">
                  <input type="hidden" name="imag" value="<?php echo $id.".png"; ?>">  
                  <button class="btn btn-primary" name="edit">edit</button> 
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <input type="hidden" name="has" value="<?php echo $hasimg;?>">
                  <input type="hidden" name="user" value="<?php echo $user;?>">
                  <input type="hidden" name="pass" value="<?php echo $pass;?>">
                  <input type="hidden" name="email" value="<?php echo $em;?>">
                  <input type="hidden" name="telnum" value="<?php echo $tel;?>">
            </form>
          </td>
   
          </tr>

      <?php
      }
      $x++;
      }
      
      ?>
 
  </tbody>
  

    </table>
    </div>
</row>
</div>
</body>

</html>
<?php
}
else
{
    echo "access denied";
    header("Refresh:2;url= http://localhost/0.7/");
}
?>
<br><br>

