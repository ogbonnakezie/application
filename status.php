<!DOCTYPE html>
<html>
<head>
	<title>Mini-App </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<center><div class="container-fluid"> 

		<h1>APPLICANT'S STATUS</h1>



	<?php 

	session_start();
    include ("connection.php");
                   $SQL = "SELECT * FROM user";

                    $result = mysqli_query($myConn,$SQL);
                       while ($row=  mysqli_fetch_array($result, MYSQLI_BOTH)){
						   $firstname = $row["first_name"];
                               $lastname = $row ["last_name"]; 
                                $code = $row ["access_code"]; 
                                $image =  $row ["img"]; 
                                   $subject =  $row ["subject"];
                               ?>
                               <img class="primary_image" src="img/<?php echo $image ;?>" width="250" height="200"/>

                               <br>
                               <br>
                   <div>
                   	<p>I <?php echo $firstname; ?>  <?php echo $lastname; ?>, applied with the application code <?php echo $code; ?>
                               
                           </p>

                           <p>My Favourite subjects are  <?php echo $subject; ?> </p>

                   </div>
</div></center>
<?php }?>
</body>
</html>