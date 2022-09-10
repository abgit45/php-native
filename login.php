<?php
session_start();
if(isset($_SESSION['chek'])) 
{
?> 


<!DOCTYPE html>
<html lang="en">
<head>
<?php require("upload.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
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
</form>
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
        <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.show-btn{
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}
.show-btn, .container1{
  position: absolute;
  top: 9.5%;
  left: 22.3%;
  transform: translate(-50%, -50%);
}

input[type="checkbox"]{
  display: none;
}
input[type="file"]{

  height: 100%;
  width: 100%;
  padding-left: 10px;
  padding-top: 9px;
  font-size: 17px;
  border: 1px solid silver;

}
.container1{
  display: none;
  background: #fff;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  margin-top:375px;
  margin-left:500px;
}
#show:checked ~ .container1{
  display: block;
}
.container1 .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.container1 .close-btn:hover{
  color: #3498db;
}
.container1 .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container1 .form{
  margin-top: -20px;
}
.container1 .form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
.form .data label{
  font-size: 18px;
}
.form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
.form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
.form .forgot-pass{
  margin-top: -8px;
}
.form .forgot-pass a{
  color: #3498db;
  text-decoration: none;
}
.form .forgot-pass a:hover{
  text-decoration: underline;
}
.form .btn{
  margin: 30px 0;
  margin-bottom:100px;
  height: 40px;
  width: 100%;
}
.form .btn:hover .inner{
  left: 0;
}
.form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
.form .by
{
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    background-color: #5bc0de;
    border-color: #46b8da;
    margin-top:20px;
    margin-left:300px;
}
.form .by:hover
{
  background-color: red;
}
.form .signup-link{
  text-align: center;
}
.form .signup-link a{
  color: #3498db;
  text-decoration: none;
}
.form .signup-link a:hover{
  text-decoration: underline;
}
      </style>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">View Form</label>
         <div class="container1">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               insert Form
            </div>
            <form action="login.php"  class="form">
            <div class="href">
            <button class="by"><a class="a" href="https://localhost/0.8/login.php">back</a></button>
            </div>

            <div class="data">
            <input type="file" class="fileToUpload form-control" ></input><br>
    <input type="text" placeholder="File name" id="filename" class="form-control"/><br>
         </div>
         
           <div class="data">
            <label>username</label>
            <input type="text" name="name" required>
         </div>
         <div class="data">
                  <label>Password</label>
                  <input type="password" name="pas" required>
               </div>
               <div class="data">
            <label>telnum</label>
            <input type="text" name="teltel" required>
         </div>   
         <div class="data">
                  <label>Email </label>
                  <input type="text" name="mail" required>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <input type="button" onclick="submitForm();" class="btn btn-info" name="save_contact" value="Save" />
               </div>
            </form>
         </div>
      </div>
      <script type="text/javascript">
		function submitForm()
		{
			var name = $('input[name=name]').val();
			var pas = $('input[name=pas]').val();
			var teltel = $('input[name=teltel]').val();
			var mail = $('input[name=mail]').val();

			if(name != '' && teltel!= '' && pas!= '' && mail != '')
			{
				var formData = {name: name, pas: pas, teltel: teltel, mail: mail};
				$('#message').html('<span style="color: red">Processing form. . . please wait. . .</span>');
				$.ajax({url: "http://localhost/0.8/ajaxform/api/submit.php", type: 'POST', data: formData, success: function(response)
				{
					var res = JSON.parse(response);
					console.log(res);
					if(res.success == true)
						$('#message').html('<span style="color: green">Form submitted successfully</span>');
					else
						$('#message').html('<span style="color: red">Form not submitted. Some error in running the database query.</span>');
				}
				});
			}
			else
			{
				$('#message').html('<span style="color: red">Please fill all the fields</span>');
			}
			
			
		} 

    if(isset($_POST['save_contact']))
{
  window.location.href = "https://localhost/0.8/login.php"; 
}
	</script>
  <?php
  ?>
<form id="myf" action="login.php" method="post">
<div class="row">
<button class="de" name="de" id="de">logout</button>

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
      if(isset($_POST['image']))
      {
        if ($_FILES['image']['size'] == 0)
        {
             $hasimg = 0;
        }
        else
        {
             $hasimg = 1;
        }
      }
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

