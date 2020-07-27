<?php  
include("connection.php");
error_reporting(0)
 ?>
<?php 

if(isset($_POST['adduser'])) {

$Product= $_POST["product"];
$Sku= $_POST["sku"];
$Price = $_POST["price"];
$Product_status = $_POST["product_status"];
$location = $_POST["location"];
$filename = $_FILES["uploadfile"]["name"];
$filetmpname = $_FILES["uploadfile"]["tmp_name"];
$folder = "img/";
move_uploaded_file($filetmpname, $folder.$filename);

$add = "INSERT INTO products (name, unique_id, price, status, location, img)
                                         VALUES('$Product', '$Sku', '$Price', '$Product_status', '$location', '$filename' )";

        if ($myConn->query($add) === TRUE) { ?>

            <script type="text/javascript">
                alert("New Account Created Successfully");
                window.location = "index.php";
            </script>
        <?php } else {
            echo "Error: " . $add . "<br>" . $myConn->error;
        }
    }
                        
?>
<?php
if(isset($_POST['edituser'])) {
     $id = mysqli_escape_string($myConn, $_POST['id']);
     $product_name = mysqli_escape_string($myConn, $_POST['name']);
    $product_id = mysqli_escape_string($myConn, $_POST['unique_id']);
    $price = mysqli_escape_string($myConn, $_POST['price']);
     $status = mysqli_escape_string($myConn, $_POST['status']);
     $location = mysqli_escape_string($myConn, $_POST['location']);


    $update = "UPDATE products SET name = '$product_name', unique_id = '$product_id', price = '$price', status = '$status', location = '$location'  WHERE id = '$id'";

if ($myConn->query($update) === TRUE) { ?>

            <script type="text/javascript">
                alert("Changes Uploaded Successfully");
                window.location = "index.php";
            </script>
        <?php } else {
            echo "Error: " . $update . "<br>" . $myConn->error;
        }
    }


?>
