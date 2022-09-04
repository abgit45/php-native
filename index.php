<form action="login.php" method="post">
<?php
$user = "abdo";
$pass = "admin";

if(isset($_POST['submit']))
{

    if ($_POST['username'] == $user && $_POST['password'] == $pass)
    {
        
        
     session_start();
     $_SESSION["chek"] = "chek";
     header("location:http://localhost/0.8/login.php");
    }
    else
    {
       echo "wrog user or pass word ";
    }

} 
?>
</form>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.php">
    <title> Login Form in HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--This is style-->
	<style>
        body
{
	margin: 0 auto;
	background-image: url("mo.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
}
        .container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
.ml
{
    text-align:center;
}
.hh
{
    text-align:center;
}
.il
{
	text-align:center;
	margin-bottom: 15px;
}
    </style>
    <!--This is a html code-->
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="User.png"/>
		<form method ="POST" action ="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name ="submit" id ="submit" value="submit" class="btn-login"/>
		</form>
	</div>
</body>
</html>
<!-- -------php------ -->
<?php

include('config.php');



if(isset($_POST['username']))
{
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * from loginform WHERE user ='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
      ?>
      <script type="text/javascript"> window.location.href = "https://localhost/0.8/login.php" </script>
  <?php
        
    }
    else{
		?>
		<div class ="il">
       <?php echo  '<font color=red>'." You Have Entered Password or User  Incorrect";?>
	</div>
        <?php
    }
        
}
?>