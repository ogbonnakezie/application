<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
  <?php  
include("connection.php");
 ?>
    <!-- Icon -->
   
    <!-- Login Form -->
    <form  method="post" action="script.php">
    
     <label> Access Code:</label> <input type="text" id="" class="fadeIn third" name="password" placeholder="Enter Your Access code" >
      <input type="submit" name="recover" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    
  </div>
</div>