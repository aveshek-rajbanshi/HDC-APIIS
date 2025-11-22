<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="../../public/stylesheets/side_navbar.css">
</head>
<body>

   <div class="main">
       <div class="navContainer">
    
         <div class="sidebar">
             <!-- header -->
           <header class="sidebar-header">
             <a class="header-logo">
               <h5><span>HDC<br>APIIS</span></h5>
             </a>
           </header>
     
           <nav class="sidebar-nav">
             <!-- Primary Nav -->
             <ul class="nav-list primary-nav">
                 <li class="nav-item">
                     <a href="student_dashboard.php" class="nav-link">
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
                         <span class="nav-label">Senior's Project</span>
                         <span class="material-symbols-rounded dropdown-icon">keyboard_arrow_down</span>
                     </a>
                     <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Senior's Project</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">View All Project</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">Add Project</a>
                         </li>
     
                     </ul>
                 </li>

                  <li class="nav-item dropdown-container">
                     <a href="#" class="nav-link dropdown-toggle">
                         <span class="material-symbols-rounded">cloud_download</span>
                         <span class="nav-label">Download Form</span>
                         <span class="material-symbols-rounded dropdown-icon">keyboard_arrow_down</span>
                     </a>
                     <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-title">Download Form</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">Project Form</a>
                         </li>
     
                         <li class="nav-item">
                           <a href="#" class="nav-link dropdown-link">Internship Form</a>
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
              <div class="profile-wrapper" id="profileWrapper"> <!-- Ye id add karo -->
               <div class="profile-image-holder">
                <img id="prosetting" src="../../public/images/profile.jpeg" alt="profile">
               </div>
               <span id="downarrowBtn" class="material-symbols-rounded">keyboard_arrow_down</span>
              </div>
            </div>

         <!-- user setting card-container -->
<div class="user-info-wrapper" id="userDropdown">
    <ul class="user-menu">

        <li class="menu-item">
            <a href="#" class="menu-link">
                <span class="material-symbols-rounded">person</span>
                My Profile
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <span class="material-symbols-rounded">key</span>
                Change Password
            </a>
        </li>
        <li class="menu-item logout">
            <a href="../../Backend/logout_action.php" class="menu-link">
                <span class="material-symbols-rounded">logout</span>
                Logout
            </a>
        </li>
    </ul>
</div>

       </div>
   </div>

    

    <script src="../../public/javascripts/side_navbar.js" defer></script>
</body>
</html>