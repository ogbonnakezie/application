<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project Work</title>
    <link rel="stylesheet" href="main.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>



  </head>
  <body>
  	<?php  
include("connection.php");
 ?>
    
    </header>

      
       <div class="container-fluid"  id="edit.php<?php echo $id; ?>">
          <div class="row" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


          	<div class="porlets-content" id="edit.php<?php echo $id; ?>">
                           <form action="config.php" method="post" class="form-horizontal row-border">

                           	 <?php // Edit
                $SQL = "SELECT * FROM people";

                $result = mysqli_query($myConn,$SQL);
                while ($row =  mysqli_fetch_array($result, MYSQLI_BOTH)){

                    
                    $id = $row["id"];
                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];
                    $email = $row["email"];
                    ?>

                    		<div class="form-group">
   							  <label class="col-sm-3 control-label">Id</label>
                                   <div class="col-sm-9">
                                        <input type="text" name="firstname" class="form-control" value="<?php echo $id; ?>"required >
                                </div>
                           </div>
                           	<div class="form-group">
   							  <label class="col-sm-3 control-label">First Name</label>
                                   <div class="col-sm-9">
                                        <input type="text" name="firstname" class="form-control" value="<?php echo $first_name; ?>"required >
                                </div>
                           </div><!--/form-group-->

                           <div class="form-group">
                               <label class="col-sm-3 control-label">last Name</label>
                                      <div class="col-sm-9">
                                           <input type="text" name="lastname"  class="form-control" value="<?php echo $last_name; ?>" required >
                                        </div>
                              </div><!--/form-group-->

                               <div class="form-group">
                                    <label class="col-sm-3 control-label">E-Mail</label>
                                     <div class="col-sm-9">
                                         <input type="email" name="email"  class="form-control" value="<?php echo $email; ?>"
                                           </div>
                                                    </div>

                                                    <div class="bottom">
                                                        <button type="submit" name="edituser" class="btn btn-primary">Edit</button>
                                                    </div><!--/form-group-->
                                                </form>

                                            </div>
                                           </div>
                                          </div>