<?php  
include("connection.php");
error_reporting(0)
 ?>
<?php 

if(isset($_POST['adduser'])) {


$Sku = $_POST["sku"];
$firstname = $_POST["firstname"];



        

    $add = " INSERT INTO user (first_name,access_code)
                                         VALUES ('$firstname', '$Sku')";

        if ($myConn->query($add) === TRUE) { ?>

            <script type="text/javascript">
                alert("New Account Created Successfully");
                window.location = "index.php";
            </script>
        <?php } else {
            echo "Error: " . $add .$adds. "<br>" . $myConn->error;
        }

       

         
    }
                        
?>
