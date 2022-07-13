<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<button onclick="myFunction()">Click me</button>
<p id="demo"></p>
<?php
$x = 1+1;
?>
<script>

   function myFunction() {
  document.getElementById("demo").innerHTML = alert(<?php echo $x; ?>);;
}
</script>

</body>
</html>
