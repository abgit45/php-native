<?php
session_start();
echo $_SESSION['role_code'];

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
  /* style for tab  */
  @import url('https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap');
body{

  font-family: 'Arimo', sans-serif;
}
.warpper{
  display:flex;
  flex-direction: column;
  align-items:left;
  margin-bottom:10px;
}
.tab{
  cursor: pointer;
  padding:10px 20px;
  margin:0px 2px;
  background:#5bc0de;
  display:inline-block;
  color:#fff;
  border-radius:4px 4px 0px 0px;
  border: 1.5px solid #ddd;
}
.panels{
  background:#fffffff6;
  border: 1.5px solid #ddd;
  min-height:200px;
  width:100%;
  max-width:500px;
  border-radius:3px;
  overflow:hidden;
  padding:20px;  
}
.panel{
  display:none;
  animation: fadein .8s;
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
.panel-title{
  font-size:1.5em;
  font-weight:bold
}
.radio{
  display:none;
}
#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel{
  display:block
}
#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab{
  background:#fffffff6;
  color:#000;
  border-top: 3px solid #5bc0de;
}
.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 17px;
  margin-left:400px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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
            <li class="active"><a href="http://localhost/1.1/dashbord.php">Dashboard</a></li>
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
		<div class="container box">
			<h1>PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</h1>
			<h3>created by abdo</h3>
			<br />
			<div class="table-responsive">
				<br />
				<div>
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
						    <th width="50%">id</th>
							<th width="50%">usertype</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
							
						</tr>
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
					<label>Enter user type</label>
					<input type="text" name="role_name" id="role_name" class="form-control" />
				</div>
<div class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">
  <div class="tabs">
  <label class="tab" id="two-tab" for="two">Role perrmissions</label>
  <label class="tab" id="one-tab" for="one">User permissions</label>

    </div>
  <div class="panels">
  <div class="panel" id="one-panel">
  <p id="GFG_UP"></p>
<?php
include('db2.php');
$user = "users";
$query2="SELECT * from permission WHERE section_name='".$user."'";
$query_result2=mysqli_query($conn,$query2);
$row_count2 = mysqli_num_rows($query_result2);
while ($row2 = mysqli_fetch_array($query_result2))
{
    echo $row2['perm_id']." ".$row2['perm_desc'].'</br>';
    ?>
    <label class="switch"><input type="checkbox" name="code"id="code"class="messageCheckbox" value="<?php echo $row2['perm_id']; ?>"><span class="slider round"></span></label>
    <?php
}

?>
  </div>

  <div class="panel" id="two-panel">

<?php


$role = "role";
$query="SELECT * from permission WHERE section_name='".$role."'";
$query_result=mysqli_query($conn,$query);
$row_count = mysqli_num_rows($query_result);
while ($row = mysqli_fetch_array($query_result))
{
    echo $row['perm_id']." ".$row['perm_desc'].'</br>';
    ?>
    <label class="switch"><input type="checkbox" name="code"id="code" value="<?php echo $row['perm_id']; ?>"><span class="slider round"></span></label>
    <?php
}


?>


  </div>
  </div>

</div>
<input type="text" name="permission_code" id="permission_code" class="form-control">
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
          <?php
$query3= "SELECT MAX(id_role) AS idf FROM roles " ;
$result_query3= mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result_query3);     
$output = ""." ".$row3['idf'];
?>
   <input type="hidden" name="userid" id="userid"value="<?php echo $output +1 ?>">
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
      <input type="hidden" name="GFG_DOWN" id="GFG_DOWN">
</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >

$('#GFG_UP')
$('#action').on('click', function() {
    var array = [ ];
    $("input:checkbox[name=code]:checked").each(function(){
      array.push($(this).val());
});
$('#GFG_DOWN').val(array.join(" "));
});


$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
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
		var role_name = $('#role_name').val();
    var code = $('#GFG_DOWN').val();
    var userid = $('#userid').val();
		if(role_name != '')
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
          window.location.href = "http://localhost/1.1/user_type/usertype.php"
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
				$('#role_name').val(data.role_name);
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
?>