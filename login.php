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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pagination</title>
</head>
<body>
  <?php
  // define how many results you want per page an verification
if(isset($_GET['select']))
{
  $results_per_page = $_GET['select'];
}else
{
  $results_per_page = 10;
}
?>
<form id="myForm" action="login.php" onchange="myFunction()">
<select name="select" id="select">
<option value="10" <?php if ($results_per_page == 10) { ?> selected="selected" <?php } ?>>10</option>
<option value="20" <?php if ($results_per_page== 20) { ?> selected="selected" <?php } ?>> 20</option>
<option value="30" <?php if ($results_per_page == 30) { ?> selected="selected" <?php } ?>> 30</option>
<option value="40" <?php if ($results_per_page == 40) { ?> selected="selected" <?php } ?>> 40</option>
<option value="50" <?php if ($results_per_page == 50) { ?> selected="selected" <?php } ?>> 50</option>
<option value="100" <?php if ($results_per_page == 100) { ?> selected="selected" <?php } ?>> 100</option>
 </select>
 <form>
 <script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>
</div>
</body>
</html>
<p id="demo"></p>
<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
include ("config.php");

if(isset($_POST['des'])) 
{
  session_destroy();
}

                                      
 
 

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
    
    header("Refresh:2;url= https://localhost/0.8/login.php");
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
  
  ?>
<form id="myf" action="login.php" method="post">
<div class="row">
 <a href="insert.php" class="btn btn-primary"> Add user</a>
<button class="btn btn-info" name="de" id="de" onclick="myFunction()">logout</button>

</form>
<?php

// determine number of total pages available
$number_of_pages = ceil($rowcount/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM users LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn,$sql);
?>
<!-- create table html -->

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
// display the links to the pages
?>
      <?php
      while ($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
          <form action="login.php" method="POST">
                <?php 
                $id = $row['id']; 
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
      ?>
  </tbody>
    </table>
    </div>
</row>
</div>
<div>
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<button id="d"> <a href="login.php?page=' . $page . '&select=' . $results_per_page . ' ">' . $page . '</a></button> ';
}
?>
</div>
</body>

</html>
<?php
}
else
{
    echo "access denied";
    header("Refresh:2;url= http://localhost/0.8/");
}
?>
<br><br>

