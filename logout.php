<?php
/**
 * Created by PhpStorm.
 * User: Ogbonna
 * Date: 5/12/2020
 * Time: 3:18 PM

*/

session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("location:admin.php");
exit;
?>