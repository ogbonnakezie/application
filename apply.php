<?php
session_start();
include("connection.php");
//error_reporting(0);

if(isset($_SESSION['user'])){

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mini-App</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <link href="plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
    <link href="plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
    <link href="plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->
    <?php include ("header.php");?>
        <!--\\\\\\\left_nav end \\\\\\-->
        <div class="contentpanel">
            <!--\\\\\\\ contentpanel start\\\\\\-->
            <div class="pull-left breadcrumb_admin clear_both">
                <div class="  theme_color">
                   <center> <h1>ONLINE APPLICATION </h1> </center>

                </div>

            </div>
            <div class="container clear_both padding_fix">
                <!--\\\\\\\ container  start \\\\\\-->
                <div id="main-content">
                    <div class="page-content">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="block-web">
                                                <div class="header">
                                                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                                                    <h3 class="content-header">Users  Information</h3>
                                                </div>
                                                <div class="porlets-content">
                                                    <div class="table-responsive">


                                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                            <a class="btn btn-primary btn-lg" href="#myModal" data-toggle="modal"> Add Your Details</a><br>
                                                            <hr>
                                                              
                                                           

                                                        </table>
                                                    </div><!--/table-responsive-->
                                                </div><!--/porlets-content-->



                                            </div><!--/block-web-->
                            </div><!--/col-md-12-->
                        </div><!--/row-->



                    </div><!--/page-content end-->
                </div><!--/main-content end-->


<!--/Add User-->

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <but   ton type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Add User Information</h4>
                            </div>
                            <div class="modal-body"> <div class="row">

                                    <div class="col-md-12">
                                        <div class="block-web">

                                            <div class="porlets-content">
                                                <form action="script.php" method="post" class="form-horizontal row-border" enctype="multipart/form-data">
                                                     <?php
                                
                                     $SQL = "SELECT * FROM user ";

                                   $result = mysqli_query($myConn,$SQL);
                                    $row=  mysqli_fetch_array($result, MYSQLI_BOTH);

                                    $user_id = $row["user_id"];
                                                       ?>
                                                    <div class="form-group">
                                                        
                                                        <div class="col-sm-9">
                                                            <input type="hidden" name="id" class="form-control" value="<?php echo $user_id ;?>" required  >
                                                        </div>
                                                    </div><!--/form-group-->

                                                 
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Last Name :</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="lastname" class="form-control" value="" required >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Address : </label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="address" class="form-control" value="" required >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Martial Status :</label>
                                                        <div class="col-sm-9">
                                                            <input type="radio" name="status" value="single"  > Single

                                                            <input type="radio" name="status"  value="married" > Married
                                                      
                                                        </div>
                                                    </div><!--/form-group-->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Educational Background :</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="education" class="form-control" value="" required>
                                                        </div>
                                                    </div><!--/form-group-->
                                                   
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select Best Subject :</label>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" name="subject[]" id=""  value="english"> English   &nbsp
                                                                <input type="checkbox" name="subject[]" value="mathematics" > Mathematics  &nbsp

                                                                <input type="checkbox" name="subject[]" value="science" > Science  &nbsp 

                                                                <input type="checkbox" name="subject[]" value="government" > Government  &nbsp 

                                                                <input type="checkbox" name="subject[]" value="art" > Art &nbsp
                                                                <input type="checkbox" name="subject[]" value="civic" > Civic  &nbsp
                                                                <input type="checkbox" name="subject[]" value="science" > Computer  &nbsp 

                                                                <input type="checkbox" name="subject[]" value="science" > History  &nbsp &nbsp

                                                                <input type="checkbox" name="subject[]" value="science" > Agriculture &nbsp
                                                                    

                                                          
                                                        </div><!--/col-sm-9-->

                                                    </div><!--/form-group-->
                                                     
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Religion : </label>
                                                        <div class="col-sm-9">
                                                            <input type="radio" name="religion" value="islam"  required> Islam &nbsp

                                                            <input type="radio" name="religion"  value="christianity" required> Christianity  &nbsp

                                                            <input type="radio" name="religion"  value="traditional" required> Traditional &nbsp
                                                      
                                                        </div>
                                                    </div><!--/form-group-->

                                                       <div class="form-group">
                                                        <label class="col-sm-3 control-label">State of Origin :</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="state" class="form-control" value="" required >
                                                        </div>
                                                    </div>
                                                       <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date Of Birth</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="date" class="form-control" value="" required >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Upload Image </label>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="uploadfile" name="lastname"  class="form-control" value="" required >
                                                        </div>
                                                    </div><!--/form-group-->

                                                    

                                                    
                                                    </div>
                                                    <div class="bottom">
                                                        <button type="submit" name="adduser" class="btn btn-primary">Submit Application </button>
                                                    </div><!--/form-group-->
                                                </form>
                                            </div><!--/porlets-content-->
                                        </div><!--/block-web-->
                                    </div><!--/col-md-6-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
 <!-- View -->
                


               

                   





            </div>
            <!--\\\\\\\ container  end \\\\\\-->
        </div>
        <!--\\\\\\\ content panel end \\\\\\-->
    </div>
    <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->

<!-- sidebar chats -->





<?php }else {
    header("location:login.php");
    exit;
} ?>

















<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/data-tables/jquery.dataTables.js"></script>
<script src="plugins/data-tables/DT_bootstrap.js"></script>
<script src="plugins/data-tables/dynamic_table_init.js"></script>



<script src="js/jPushMenu.js"></script>
<script src="js/side-chats.js"></script>

</body>
</html>

