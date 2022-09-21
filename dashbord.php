<?php 
session_start();
include('db2.php');
//$sql="SELECT * from users WHERE email ='".$email."'AND Pass='".$password."' AND id=id AND role_name=role_name limit 1";
// $sql="SELECT * FROM users WHERE id=id AND role_name=role_name ";
// $result=mysqli_query($conn,$sql);
$id = $_POST['email2'];
$session = $_SESSION['id'] = $id;
print_r($session);
// while ($row = mysqli_fetch_array($result))
//  {
//     $id = $row['id'];
//     $role = $row['role_name'];
//     echo $id;
//     //echo $role;
//  }
$query="SELECT * from rolles_permission WHERE roles_role_id  = '".$id."' ";
$query_result=mysqli_query($conn,$query);
while ($row2 = mysqli_fetch_array($query_result))
{
    $role_code = $row2['roles_permission_code'];
  
}
$_SESSION['role_code'] = $role_code;
$array = str_split($_SESSION['role_code']);
print_r($array);
?>

<head>
<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
.ttc{
    position: absolute;
    top: 15px;
    left: 45px;
    height: 45px;
    width: 45px;
    text-align: center;
    background: #1b1b1b;
    border-radius: 3px;
    cursor: pointer;
    transition: left 0.4s ease;
  }
  .ttc.click{
    left: 260px;
  }
  .ttc span{
    color: white;
    font-size: 28px;
    line-height: 45px;
  }
  .ttc.click span:before{
    content: '\f00d';
  }
  .sidebar{
    position: fixed;
    width: 250px;
    height: 100%;
    left: -250px;
    background: #1b1b1b;
    transition: left 0.4s ease;
  }
  .sidebar.show{
    left: 0px;
	bottom :0px;
  }
  .sidebar .text{
    color: white;
    font-size: 25px;
    font-weight: 600;
    line-height: 65px;
    text-align: center;
    background: #1e1e1e;
    letter-spacing: 1px;
  }
  nav ul{
    background: #1b1b1b;
    height: 100%;
    width: 100%;
    list-style: none;
  }
  nav ul li{
    line-height: 60px;
    border-top: 1px solid rgba(255,255,255,0.1);
  }
  nav ul li:last-child{
    border-bottom: 1px solid rgba(255,255,255,0.05);
  }
  nav ul li a{
    position: relative;
    color: white;
    text-decoration: none!important;
    font-size: 18px;
    padding-left: 40px;
    font-weight: 500;
    display: block;
    width: 100%;
	right:25px;
    border-left: 3px solid transparent;
	
  }
  nav ul li.active a{
    color: cyan;
    background: #1e1e1e;
    border-left-color: cyan;
  }
  nav ul li a:hover{
    background: #1e1e1e;
	color:cyan;
  }
  nav ul ul{
    position: static;
    display: none;
  }
  nav ul .feat-show.show{
    display: block;
  }
  nav ul .serv-show.show1{
    display: block;
  }
  nav ul ul li{
    line-height: 42px;
    border-top: none;
  }
  nav ul ul li a{
    font-size: 17px;
    color: #e6e6e6;
    padding-left: 80px;
  }
  nav ul li.active ul li a{
    color: #e6e6e6;
    background: #1b1b1b;
    border-left-color: transparent;
  }
  nav ul ul li a:hover{
    color: cyan!important;
    background: #1e1e1e!important;
  }
  nav ul li a span{
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    font-size: 22px;
    transition: transform 0.4s;
  }
  nav ul li a span.rotate{
    transform: translateY(-50%) rotate(-180deg);
  }
  .content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #202020;
    z-index: -1;
    text-align: center;
  }
  .content .header{
    font-size: 45px;
    font-weight: 600;
  }
  .content p{
    font-size: 30px;
    font-weight: 500;
  }
		</style>
</head>
	</head>
	<body>
	<div class="ttc">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Side Menu
         </div>
         <ul>
            <li class="active"><a href="dashbord.php">Dashboard</a></li>
            <li>
               <a href="http://localhost/1.1/user_type/usertype.php" class="feat-ttc">manage usertype
 
               </a>
            </li>
            <li>
               <a href="http://localhost/1.1/login.php" class="serv-ttc">manage users

               </a>
            </li>
            
         </ul>
		</nav>
      <script>
         $('.ttc').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-ttc').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-ttc').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>