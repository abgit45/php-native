
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.php">
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
				<input type="text" name="email" placeholder="Enter the User Name"/>	
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

include('db2.php');

if(isset($_POST['email']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
    
    $sql="SELECT * from users WHERE email ='".$email."'AND Pass='".$password."'AND id=id limit 1";
    
    $result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)==1){
		while ($row = mysqli_fetch_array($result))
	 {
		?>
		<form id="myForm" action="dashbord.php" method="post">
			<input type="text" name="email2" id="email2" value="<?php echo $email = $row['role_name']; ?>"/>
		  </form>
		  <script>
  document.getElementById("myForm").submit();
</script>
		<?php
	 }
		session_start();
		
		 $_SESSION["chek"] = "chek";
		  ?>
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