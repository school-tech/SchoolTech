<?php 
  session_start();
  if(isset($_SESSION['id'])){
      
    
  }
  else{
    header('location: view_staff.php');
  }
 ?>