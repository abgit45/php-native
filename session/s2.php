<?php
session_start();
if(isset($_SESSION['chek'])) 
{
    echo 'hello abdu how are you?';
}
else
{
    echo "access denied";
    header("Refresh:2;url= http://localhost/0.7/session/s1.php");
}
?>
<br><br>
<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "<?php session_destroy(); ?>";
}
</script>
