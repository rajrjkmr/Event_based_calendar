<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="ifet";
$delete=$_GET['id'];
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM calendar where id='$delete'";
if(mysqli_query($conn, $sql)){  
  header("Location:edit.php");  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
?>