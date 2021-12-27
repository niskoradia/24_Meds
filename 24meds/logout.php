
<?php ob_start();
include 'connection.php';
session_start();

if(isset($_SESSION['loggedin'])){
    session_destroy();
    header("location:/24med/index.php");
  
}

?>