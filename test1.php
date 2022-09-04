<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pagination</title>
  <style>

    
    table, td, th {  
        border: 1px solid #000;
        text-align: center;
       
      }
      table
      {
      
      width: 16%; 
      margin-left:40%;
      margin-top: 5%;
      border-collapse: collapse;
      border-spacing: 0;
      box-shadow: 0 2px 15px rgba(64,64,64,.7);
      border-radius: 9px 9px  9px;
      display: auto;
        overflow-y: auto;
        float: center;
        
      
      }
        
         th,td
         {
          padding: 15px;
         }
         th
         {
          background-color: #E0FFFF;
       color: #000;
       font-family: 'Open Sans',Sans-serif;
       font-weight: 200;
       text-transform: uppercase;
         }
       tr{
       width: 100%;
       background-color: #fafafa;
       font-family: 'Montserrat', sans-serif;
      }
      tr:nth-child(even){
       background-color: #eeeeee;
      }
    a{
      text-decoration: none;
    }
   div{
     margin-left:690px; 
     margin-top: 3%;
    }
    select{
      margin-left:730px; 
      margin-top: 3%;
      width: 10%;
    }
  </style>
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
<form id="myForm" action="test1.php" onchange="myFunction()">
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

<?php
//include data
 include ("config2.php"); 
// connect to database
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );


// find out the number of results stored in database
$sql='SELECT * FROM test';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM test LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
?>
<!-- create table html -->
<table>
  <thead>
  <th>id</th>
  <th>user</th>
  </thead>
<?php
while($row = mysqli_fetch_array($result)) {
  ?>
<tbody>
   <td>  <?php echo $row['id'];?> </td>
    <td> <?php echo $row['user']; ?> </td>
    </tbody>
       <?php
}
?>
</table>
<?php
// display the links to the pages
?><div><?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<button> <a href="test1.php?page=' . $page . '&select=' . $results_per_page . ' ">' . $page . '</a></button> ';
}
?>
</div>
</body>
</html>