<?php

// database connection
include "../../../Database/db_connection.php";


$sqlQuery = "SELECT * FROM student WHERE status = 'pending'";
$runQuery = mysqli_query($conn,$sqlQuery);
$isData = mysqli_num_rows($runQuery);
?>