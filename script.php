<?php
error_reporting(0);

if(isset($_POST['login'])){
    session_start();
    include ("connection.php");
   
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE  access_code = '$password'";

    $result = mysqli_query($myConn, $sql);
    $row=  mysqli_fetch_array($result, MYSQLI_BOTH);
    $user_id = $row['user_id'];
   
    $rows = mysqli_num_rows($result);

    if ($rows == 1){

       
        $_SESSION['user'] = $user_id;
        $user_id = $_SESSION['user'];
       ?>

        <div id="loading-overlay">
            <div class="loader">..Please ..Wait</div>
        </div>




        <script type="text/javascript">
            function myFunctions3(){

                window.location = "apply.php";
            }
            setTimeout(myFunctions3, 5000)

        </script>





        <?php

    }
    else{?>


        <div id="loading-overlay">
            <div class="loader">..Please ..Wait</div>
        </div>




        <script type="text/javascript">
            function myFunctions4(){
                alert("Invalid user id or Password");
                window.location = "login.php";
            }
            setTimeout(myFunctions4, 5000)

        </script>


    <?php }

}


?>

<?php
error_reporting(0);

if(isset($_POST['recover'])){
    session_start();
    include ("connection.php");
   
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE  access_code = '$password'";

    $result = mysqli_query($myConn, $sql);
    $row=  mysqli_fetch_array($result, MYSQLI_BOTH);
    $user_id = $row['user_id'];
   
    $rows = mysqli_num_rows($result);

    if ($rows == 1){

       
        $_SESSION['user'] = $user_id;
        $user_id = $_SESSION['user'];
       ?>

        <div id="loading-overlay">
            <div class="loader">..Please ..Wait</div>
        </div>




        <script type="text/javascript">
            function myFunctions3(){

                window.location = "confirm.php";
            }
            setTimeout(myFunctions3, 5000)

        </script>





        <?php

    }
    else{?>


        <div id="loading-overlay">
            <div class="loader">..Please ..Wait</div>
        </div>




        <script type="text/javascript">
            function myFunctions4(){
                alert("Invalid user id or Password");
                window.location = "login.php";
            }
            setTimeout(myFunctions4, 5000)

        </script>


    <?php }

} ?>
<?php


if(isset($_POST['adduser'])) {
        session_start();
include ("connection.php");
           
            $lastname = $_POST["lastname"];
            $address =   $_POST["address"];
            $education =$_POST["education"];
            $status = $_POST["status"];
            $state = $_POST["state"];
            $religion = $_POST["religion"] ;
            $date = $_POST["date"];
            $user_id = $_POST["id"];

            $filename = $_FILES["uploadfile"]["name"];
            $filetmpname = $_FILES["uploadfile"]["tmp_name"];

            $folder = "img/";
            move_uploaded_file($filetmpname, $folder.$filename);

            $checkbox1 = $_POST["subject"];
            $chk = "";

                foreach ($checkbox1 as $chk1 )
                 {
                   $chk .= $chk1;
                }
   

                        $update = "UPDATE user SET address = '$address', last_name = '$lastname',education = '$education', martial_status = '$status', state = '$state', religion = '$religion', dob = '$date', subject = '$chk', img =  '$filename' WHERE user_id  =  '$user_id' ";

      if ($myConn->query($update) === TRUE) { ?>

            <script type="text/javascript">
                alert("Changes Uploaded Successfully");
                window.location = "confirm.php";
            </script>
        <?php } else {
            echo "Error: " . $update . "<br>" . $myConn->error;
        }
    }


?>




<?php


if(isset($_POST['adminlogin'])){
    session_start();
    include ("connection.php");
    $admin = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$admin' AND password = '$password'";

    $result = mysqli_query($myConn, $sql);
    $row=  mysqli_fetch_array($result, MYSQLI_BOTH);
    $admin_username = $row['username'];
    $rows = mysqli_num_rows($result);

    if ($rows == 1){

        $_SESSION['admin'] = $admin_username;
        $admin_username = $_SESSION['admin'];
?>
        <script type="text/javascript">


            window.location = "administrator";
        </script>

        <?php



    }
    else{?>   <script type="text/javascript">

        alert("Invalid user id or Password");
        window.location = "admin.php";
    </script>

    <?php die(); }

}


?>