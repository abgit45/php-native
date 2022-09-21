<?php
session_start();
if(isset($_SESSION['chek']))
{

$array = str_split($_SESSION['role_code']);
print_r($array);

$perm_2 = $array[1];
	echo $_SESSION['role_code'];
	include ("db2.php");
	$sql='SELECT * FROM users ';
    $result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($result))
							{
								?>
								
								<form action="login.php" method="POST">
							
								</form>  
								<?php   

							}
							?>

<html>
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
			body
		{
					margin:0;
					padding:0;
					background-color:#f1f1f1;
		}
			.box
		{
					width:1270px;
					padding:20px;
					background-color:#fff;
					border:1px solid #ccc;
					border-radius:5px;
					margin-top:25px;
		}
			h3
		{
					margin-left :450px;
		}
			#des
		{
                    margin-left:90%;
					margin-top:10%;
		}
		
			.ttc
		{
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
               <a href="http://localhost/1.1/user_type/usertype.php" class="feat-ttc">Manage roles
 
               </a>
            </li>
            <li>
               <a href="http://localhost/1.1/login.php"  class="serv-ttc">Manage users

               </a>
            </li>
			<li>
               <a href="#" class="logout-ttc" name="des"id="des">logout

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
		   $('.logout-ttc').click(function(){
             $('nav ul .logout-show').toggleClass("show2");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
	  
	  
		<?php 
		if(isset($_POST['des'])) 
		{
		  session_destroy();

		  ?>
		  <script type="text/javascript"> window.location.href = "https://localhost/1.1/" </script>
		  <?php 
		}
		?>
		<div class="container box">
			<h1>PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</h1>
			<h3>created by abdo</h3>
			<br />
			<div class="table-responsive">
				<br />	            
				<div>
					<form method="post" action="#">
				<button class="btn btn-info" name="des" id="des">logout</button>
					</form>
					<?php
if($array[1] == 2)
{
?>
				<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				<?php
}else
{
	?><input type="hidden" id="add_button" data-toggle="modal" data-target="#userModal" ><?php
}
?>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<?php  
						if($array[0] == 1){   
						?>
						<tr>
						    <th width="10%">id</th>
							<th width="6%">role_name</th>
							<th width="10%">Image</th>
							<th width="35%">First Name</th>
							<th width="35%">Last Name</th>
							<th width="35%">email</th>
							<th width="35%">password</th>
							
							<?php 
							if (in_array(2, $array)) {
							if($array[2] == 3){ 

								?>
							<th width="10%">Edit</th>
							<?php 

							} else
							
							{

							} 

						}else

						{

						}
						if (in_array(2, $array)) {
							?>
							<?php if($array[3] == 4){ ?>
							<th width="10%">Delete</th>
							<?php 
							} else

							{
								
							} 
						}else
						{

						}
							?>
						</tr>
						<?php
						}else
						{
							?>
							<?php
						}
?>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>
<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter First Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<br />
					<label>Enter Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<br />
					<label>usertpe</label>
					<select name="role_name" id="role_name" class="form-control">
					<?php
					include ("db2.php");
					$sql='SELECT * FROM roles';
                    $result = mysqli_query($conn,$sql);

					$query= "SELECT max(id_role) AS ids FROM roles" ;
					$result_query= mysqli_query($conn,$query);
					$row_assoc = mysqli_fetch_assoc($result_query);

					while ($row = mysqli_fetch_array($result))
							{
								?>
								
								<form action="login.php" method="POST">
										<?php  
										?><option value="<?php echo $role_name = $row['id_role']; ?>"><?php echo $role_name = $row['id_role']." ".$role_name = $row['role_name']; ?>  </option>
								</form>  
								<?php   

							}
							?>
					
						
					</select>
					<br />
					<label>email</label>
					<input type="text" name="email" id="email" class="form-control" />
					<br />
					<label>pass</label>
					<input type="password" name="pass" id="pass" class="form-control" />
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" language="javascript" >
	
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	var dataTable = $('#user_data').DataTable({
		"aLengthMenu": [[10, 20, 30, 40, 50, 100 -1], [10, 20, 30, 40, 50, 100, "All"]],
        "iDisplayLength": 10,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#first_name').val();
		var lastName = $('#last_name').val();
		var role_name = $('#role_name').val();
		var firstName = $('#email').val();
		var lastName = $('#pass').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(firstName != '' && lastName != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});

	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('#role_name').val(data.role_name);
				$('#email').val(data.email);
				$('#pass').val(data.pass);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>
<?php
}else
{
	echo"accsess denid";
	 header("Refresh:2;url=https://localhost/1.1/");
	

}
?>
