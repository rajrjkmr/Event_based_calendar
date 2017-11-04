<html lang="en">
<head>
  <title>Date</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
<a href="index.php">HOME</a>                              <a href="form.php">Update</a>                           <a href="edit.php">Edit</a>
            <form class="form-horizontal" action="upload.php"  method="POST" enctype="multipart/form-data">
                <center><h2>Calendar Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Hint</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="hint" placeholder="Enter the Hint.." class="form-control" autofocus>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Model Heading:</label>
                    <div class="col-sm-9">
                        <input type="text" name="heading" id="email" placeholder="Model Heading......" class="form-control">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="password" class="col-sm-3 control-label">Model Content:</label>
                    <div class="col-sm-9">
                        <input type="text" id="password" placeholder="Model Content......." name="content" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date:</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">File:</label>
                    <div class="col-sm-9">
                        <input type="file" id="birthDate" name="files" class="form-control">
                    </div>
                </div>
                
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>

            </form> <!-- /form -->
            </center>
        </div> <!-- ./container -->



</body>
</html>