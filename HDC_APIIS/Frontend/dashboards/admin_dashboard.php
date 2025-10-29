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
       <div class="navContainer">
         <?php include "../admin/admin_sidenavbar/sidenavbar.php"; ?>   
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
                    <h5>Preyanch Rajbanshi</h5>
                    <h6>preyanchrajbanshi@himalayadarshancollege.edu</h6>
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
                    <a href="#" class="link">
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