<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- <link rel="stylesheet" href="../../public/stylesheets/side_navbar.css"> -->
    <link rel="stylesheet" href="../../public/stylesheets/studentPages/student_dashboard.css">
</head>
<body>

   <div class="main">
       <div class="navContainer">
         <div class="sidebar-menu-button">
           <span class="material-symbols-rounded">menu</span>
         </div>
     
         <div class="sidebar">
             <!-- header -->
           <header class="sidebar-header">
             <a class="header-logo">
               <h5><span>HDC<br>APIIS</span></h5>
             </a>
             <div class="sidebar-toggler">
                 <span class="material-symbols-rounded">chevron_left</span>
             </div>
           </header>
     
           <nav class="sidebar-nav">
             <!-- Primary Nav -->
             <ul class="nav-list primary-nav">
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <span class="material-symbols-rounded">widgets</span>                    
                         <span class="nav-label">Dashboard</span>
                     </a>
                     <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Dashboard</a>
                         </li>
                     </ul>
                 </li>
     
                 <li class="nav-item dropdown-container">
                     <a href="#" class="nav-link dropdown-toggle">
                         <span class="material-symbols-rounded">folder_code</span>
                         <span class="nav-label">Project</span>
                         <span class="material-symbols-rounded dropdown-icon">keyboard_arrow_down</span>
                     </a>
                     <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Project</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">All Project</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">Add Project</a>
                         </li>
     
                     </ul>
                 </li>
     
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <span class="material-symbols-rounded">add_notes</span>
                         <span class="nav-label">Internship</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Internship</a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item dropdown-container">
                     <a href="#" class="nav-link dropdown-toggle">
                         <span class="material-symbols-rounded">school</span>
                         <span class="nav-label">Faculty</span>
                         <span class="material-symbols-rounded dropdown-icon">keyboard_arrow_down</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Faculty</a>
                         </li>

                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">BIM</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">BCA</a>
                         </li>

                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">Bsc.IT</a>
                         </li>

                     </ul>
                 </li>

                  <li class="nav-item">
                     <a href="#" class="nav-link">
                         <span class="material-symbols-rounded">analytics</span>
                         <span class="nav-label">Student Request</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Student Request</a>
                         </li>
                     </ul>
                 </li>
     
     
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <span class="material-symbols-rounded">analytics</span>
                         <span class="nav-label">Analytics / Reports</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Analytics / Reports</a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <span class="material-symbols-rounded">settings</span>
                         <span class="nav-label">Setting</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Setting</a>
                         </li>
                     </ul>
                 </li>
     
             </ul>
     
             <!-- Secondary Nav -->
             <ul class="nav-list secondary-nav">
                 <li class="nav-item">
                     <a href="../../Backend/logout_action.php" class="nav-link">
                         <span class="material-symbols-rounded">logout</span>
                         <span class="nav-label">Sign Out</span>
                     </a>
                 </li>
             </ul>
     
           </nav>
         </div>
       </div>
     
       <div class="dashboard">
        <div class="dashboard-header">
            <div class="user-container">
              <div class="notify-wrapper">
                <span class="notify"></span>
                <span class="material-symbols-rounded">notifications</span>
              </div>
              <div class="profile-wrapper">
                <div class="profile-image-holder">
                  <img src="../../public/images/profile.jpeg" alt="profile-Picture">
                </div>
                <span class="material-symbols-rounded">keyboard_arrow_down</span>
                </div>
            </div>
            <div class="user-info-wrapper">
              <ul class="user-items-list">
                <li class="user-details">
                    <h5><?php echo $_SESSION['$userName'] ?></h5>
                    <h6><?php echo $_SESSION['$userEmail'] ?></h6>
                </li>
                <li class="user-detail-link">
                    <a href="#" class="link">
                      <span class="material-symbols-rounded">edit</span>
                      <span class="text-btn">Edit Profile</span>
                    </a>
                </li>
                <li class="user-detail-link">
                    <a href="#" class="link">
                     <span class="material-symbols-rounded">key</span>
                     <span class="text-btn">Change Password</span>
                    </a>
                </li>
                <li class="user-detail-link">
                    <a href="../../Backend/logout_action.php" class="link">
                     <span class="material-symbols-rounded">logout</span>
                     <span class="text-btn">Logout</span>
                    </a>
                </li>
              </ul>
            </div>
        </div>
       </div>
   </div>

    

    <script src="../../public/javascripts/side_navbar.js"></script>
</body>
</html>