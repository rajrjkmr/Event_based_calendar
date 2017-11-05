  <!DOCTYPE html>
  <?php 
$servername = "localhost";
$username = "root";
$password = "root";                                                          
$db="ifet";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT *FROM calendar";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$f="#";
while($row = mysqli_fetch_assoc($result)) {
    $data[$row["dates"]]["number"]=$row["hint"];
    $data[$row["dates"]]["url"]=$f.$row["id"];
    
    ?> 
    <div class="modal fade" id="<?php echo $row['id'];?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row["heading"];?></h4>
        </div>
        <div class="modal-body">
          <p><?php  echo $row["content"]; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php


    }
    $data=json_encode($data);
      
} else {
   
}


mysqli_close($conn);

    ?>
<html lang="en">
  <head>
    
    <link href="css/responsive-calendar.css" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div
     class="container">
    <div class="col-md-7">
      <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <a class="pull-left" href="form.php"><div class="btn btn-primary">Update</div></a>

            <a class="pull-left" href="edit.php"><div class="btn btn-primary">Edit</div></a>
            
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
          

        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>

        <a ><div class="days" data-group="days">
          
        </div></a>
        </div>
      </div>

      <!-- Responsive calendar - END -->
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsive-calendar.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({    
          time: '<?php echo date("Y-m");?>',  
          events: <?php echo $data; ?>
        });
      });
    </script>
  </body>
</html>