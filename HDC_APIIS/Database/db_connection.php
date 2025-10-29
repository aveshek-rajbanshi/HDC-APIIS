<?php 

  $localhost = "localhost";
  $username  = "root";
  $password  = "";
  $database  = "hdc_apiis_1155";

  //   create connection
  $conn = mysqli_connect($localhost, $username, $password, $database);

 //   check connection
  if(!$conn){
    die("database connection failed. ". mysqli_connect_error());
  }
  // }else{
  //   echo "<script>alert('Database connection successful.');</script>";
  // }

?>