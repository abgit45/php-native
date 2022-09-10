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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<?php

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
    
    header("Refresh:2;url= https://localhost/crud/login.php");
  }else
  {
      echo "<font color='red'>is a error in your delete".mysqli_error($conn);
  }
  
}



?>

 <link rel="stylesheet" href="style4.css">
 <div class="container">
<?php
$sql = "SELECT * FROM users";
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
                <?php $id = $row['id']; ?>
                <?php $user = $row['username']; ?>
                <?php $pass = $row['password']; ?>
                <?php $em = $row['email']; ?>
                <?php $tel = $row['telnum']; ?>

                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telnum']; ?></td>
                <td> 
                  <button class="btn btn-danger" name="delete">Supp </button> 
                  <input type="hidden" name="pid" value="<?php echo $id;?>">
                </td>

          </form>
          <td> 
            <form action="edit.php" method="POST">
                  <button class="btn btn-primary" name="edit">edit</button> 
                  <input type="hidden" name="id" value="<?php echo $id;?>">
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



