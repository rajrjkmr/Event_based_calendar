<html>
<head>
<title>Calendar Updates</title>

</head>
<body style="background:#E6E6FA;" >
<center>
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

?>
<table width="100%">

<tr ><th style="border: 0px solid;
    padding: 50px;
	
    background: #ddddee;
    font-size:50pt;
    color:	#CD5C5C;">CALENDAR ACTIVITICES</th></tr>
	<tr><td style="border: 0px solid;
    padding: 5px;
    background: #3CB371;
    border-bottom-left-radius: 0em;
    font-size:19pt;
    font-weight:bold;
  font-family:URW Chancery L;
    color:  #FF00FF;text-align:right;"><a href="index.php"> HOME </a></td>
    <td style="border: 0px solid;
    padding: 5px;
    background: #3CB371;
    border-bottom-left-radius: 0em;
    font-size:19pt;
    font-weight:bold;
  font-family:URW Chancery L;
    color:  #FF00FF;text-align:right;"><a href="edit.php">EDIT</a></td>
     <td style="border: 0px solid;
    padding: 5px;
    background:	#3CB371;
    border-bottom-left-radius: 0em;
    font-size:19pt;
	font-weight:bold;
  font-family:URW Chancery L;
    color:	#FF00FF;text-align:right;"><a href="form.php"> NEW </a></td></tr> 
</table></center><pre>




<table border=0pt; width="60%"; cellpadding=25px; >
<tr style=" background:	#3CB371; font-size:20pt; color:white;font-weight:bold;"><th>DATE</th><th>HINT</th><th>MODEL HEADING</th><TH>MODEL CONTENT</TH><th>DELETE</th></tr>
<?php
 $sql="SELECT *FROM calendar";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
	 $id=$row['id'];
	 $date=$row['dates'];
	 $hint=$row['hint'];
	 $heading=$row['heading'];
     $content=$row['content'];
  ?>
  <tr style="font-size:14pt;font-weight:bold;background:#DCDCDC; color:red;">
        <td><?php echo($date);  ?></td>
       
        <td><?php echo($hint);?></td>
        <td><?php echo $heading; ?></td><th><?php echo $content; ?></th><th><a href="delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a></th>
        </tr>
        <?php
 }
 ?>
  
  
  
</table></pre>


</body>
</html>
