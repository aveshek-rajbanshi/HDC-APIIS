<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- <link rel="stylesheet" href="../../public/stylesheets/side_navbar.css"> -->
    <link rel="stylesheet" href="../../public/stylesheets/adminPages/admin_dashboard.css">
</head>
<body>

   <div class="main">
       
         <div class="sidebar-menu-button">
           <span class="material-symbols-rounded">menu</span>
         </div>
     
         <div class="sidebar">
             <!-- header -->
           <header class="sidebar-header">
             <a class="header-logo">
                 <!-- <img src="../../public/images/project-logo/HDC-APIIS.png" alt="HDC-APIIS"> -->
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
                     <a href="../../dashboards/admin_dashboard.php" class="nav-link">
                         <span class="material-symbols-rounded">widgets</span>                    
                         <span class="nav-label">Dashboard</span>
                     </a>
                     <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="../../dashboards/admin_dashboard.php" class="nav-link dropdown-title">Dashboard</a>
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
                     <a href="../admin/admin_pages/student_request.php" class="nav-link">
                         <span class="material-symbols-rounded">analytics</span>
                         <span class="nav-label">Student Request</span>
                     </a>
                      <!-- Dropdown-Styling -->
                     <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a href="../admin/admin_pages/student_request.php" class="nav-link dropdown-title">Student Request</a>
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
                         <span class="nav-label">Log Out</span>
                     </a>
                 </li>
             </ul>
     
           </nav>
         </div>
       </div>
     

    

    <script src="../../public/javascripts/side_navbar.js"></script>
</body>
</html>