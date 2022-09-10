
	<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
    <input type="file"
		name="uploadfile"
		value="" />
	<div>
		<button type="submit"
				name="upload">
		UPLOAD
		</button>
	</div>
</form>
</div>
<?php 
$db = mysqli_connect("localhost", "root", "", "demo");

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
$folder = "images/".$filename;



// Get all the submitted data from the form
$sql = "INSERT INTO image (filename) VALUES ('$filename')";

// Execute query

mysqli_query($db, $sql);

// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
	?>
	<img src="<?php echo $folder; ?>" alt="" />
	<?php
}else{
	echo '<script> alert ("please select image")</script>';
}
}
$result = mysqli_query($db, "SELECT * FROM image");
?>