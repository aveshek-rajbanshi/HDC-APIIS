<?php 
include "../../../Backend/admin/student_request_action.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Request</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../../public/stylesheets/adminPages/admin_dashboard.css">
    <link rel="stylesheet" href="../../../public/stylesheets/adminPages/student_request.css">
</head>
<body>
   <div class="main">
      <div class="navContainer">
         <?php require_once "../admin_sidenavbar/sidenavbar.php"; ?>   
      </div>

      <div class="student-request-dashboard">
         <div class="dashboard-req-header">
            <h3>Student Request</h3>
         </div>

         <div class="student-list-table">
            <table>
               <!-- Table Header -->
               <thead>
                  <tr>
                     <th>Student Name</th>
                     <th>CRN</th>
                     <th>Faculty</th>
                     <th>Semester</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>

               <!-- Table Body -->
               <tbody>
                   <?php
                      if($isData){
                        while($getUser = mysqli_fetch_assoc($runQuery)){

                           echo "<tr>
                                  <td class='student-name-warpper'>
                                   <div class='std-profile-box'></div>
                                   <h5>".$getUser['Full_Name']."</h5>
                                  </td>
                                  <td>".$getUser['CRN']."</td>
                                  <td>".$getUser['Program']."</td>
                                  <td>".$getUser['Semester']."</td>
                                  <td><span class='status-pending'>".$getUser['status']."</span></td>
                                  <td>
                                    <a href='#' class='accept-btn'>Accept</a>
                                    <a href='#' class='reject-btn'>Reject</a>
                                  </td>
                                 </tr>";
                        }
                      }else{
                        echo "No Data to Show";
                      }
                  ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <script src="../../../public/javascripts/side_navbar.js"></script>
</body>
</html>
