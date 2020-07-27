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

			<h1>APPLICANT'S DETAILS</h1>



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
                               	<p>Dear  <?php echo $firstname ;?> <?php echo $lastname ;?> , your application details have been received . 
								Your Access code is <?php echo $code ;?> . Kindly go through the details .
								</p>
                               </div>
 <?php }?>

 					<table class="table table-hover">
 			 <thead>
				    <tr>
				      
				      <th>Details</th>
				      <th>Applicant's Information</th>
				     
				    </tr>
				  </thead>
				  <tbody>

				  				<?php
    	
         $SQL = "SELECT * FROM user";

            $result = mysqli_query($myConn,$SQL);
           while ($row=  mysqli_fetch_array($result, MYSQLI_BOTH)){
           	$address = $row["address"];
             $status = $row["martial_status"];
             $education = $row["education"];
              $subject = $row["subject"];
               $religion = $row["religion"];
                $state = $row["state"];
                 $dob = $row["dob"];
           

            ?>
				    <tr>
				     
				      <td>Address</td>
				      <td><?php echo $address; ?></td>				      				      
				    </tr>
				    <tr>
				     
				      <td>Martial Status</td>
				     <td><?php echo $status; ?></td>				     
				     
				    </tr>
				    <tr>
				     
				      <td >Educational Background </td>
				      <td><?php echo $education; ?></td>
				    </tr>
				    <tr>
				     
				      <td> Select Best Subject </td>
				      <td><?php echo $subject; ?></td>
				    </tr>
				    <tr>
				     
				      <td >Religion </td>
				      <td><?php echo $religion; ?></td>
				    </tr>
				     <tr>
				     
				      <td >State of Origin </td>
				      <td><?php echo $state; ?></td>
				    </tr>
				    <tr>
				     
				      <td >Date Of Birth </td>
				      <td><?php echo $dob; ?></td>
				    </tr>

				  </tbody>
				<?php } ?>
</table>


		</div></center>

</body>
</html>