<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="ifet";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


   
	$dates=$_POST["date"];


	$hint=$_POST["hint"];
	$heading=$_POST["heading"];
	$content=$_POST["content"];

     
 $file =$_FILES['files']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 

 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO calendar(dates,hint,heading,content,file) VALUES('$dates','$hint','$heading','$content','$file')";
if(mysqli_query($conn, $sql)){
header("Location:form.php");	
 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
 


?>
<html>
<header>
</header>
<body>
<a href="index.php">HOME PAGE</a>
</body>
</html>