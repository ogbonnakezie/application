<!DOCTYPE html>
<html>
<head>
	<title>Mini-App</title>
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
 	<?php
 	session_start();
    include ("connection.php");
                   $SQL = "SELECT * FROM user";

                    $result = mysqli_query($myConn,$SQL);
                       while ($row=  mysqli_fetch_array($result, MYSQLI_BOTH)){
						   $firstname = $row["first_name"];
                               $lastname = $row ["address"];?>

                        <div >
                        	<p> Dear <?php echo $firstname; ?> <?php echo $lastname; ?> , <br>
                        	</p>

                        </div>                                        <?php }?>
             
                        	<div>
                        		<?php $SQL = "SELECT * FROM access";

                    $result = mysqli_query($myConn,$SQL);
                       while ($row=  mysqli_fetch_array($result, MYSQLI_BOTH)){
						   $code = $row["access_code"];
						   $user_id = $row["user_id"];
                              
                               ?>

                               <p>Your application with the access code   <?php echo $code; ?> is successful.</p>
                        	</div>  

                        	<div>
                        		<p> Kindly Print Application Status and Application details by clicking the buttons below </p>


                        		<button type="submit" class="btn btn-primary btn-lg"> <a href="status.php?id=<?php echo $row["user_id"]; ?>"> Application Status </a></button>   <button  type="submit" class="btn btn-primary btn-lg"><a href="details.php?id=<?php echo $row["user_id"];?>" >  Application Detail </a></button>
                        	</div>
                        	 <?php }?>
             
</div></center>

</body>
</html>