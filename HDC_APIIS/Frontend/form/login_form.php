<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../public/stylesheets/users_login.css">
</head>
<body>
    
    <div class="container">
      <div class="header-wrapper">
          <header>Login</header>
          <a href="../../Frontend/landingpage/landingpage.html">
            <i class="ri-close-fill"></i>
          </a>
        </div>

        <form action="../../Backend/login_action_form.php" method="POST">
            <!-- FIRST FORM -->
          <div class="form first">
            <div class="title">Login Credentials</div>
            <div class="login-fields">

                <div class="input-field">
                    <label for="user_email">Email Address</label>
                    <input type="text" name="user_email" id="user_email" placeholder="email address">
                </div>

                 <div class="input-field">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="password">
                </div>

                <div class="input-field">
                    <label for="role">Role</label>
                    <select name="role" id="role" required>
                      <option value="" disabled selected>Select your role</option>
                      <option value="student">Student</option>
                      <option value="supervisor">Supervisor</option>
                      <option value="admin">Admin</option>
                      <option value="sub_admin">Sub-Admin</option>
                    </select>
                </div>

                <div class="forget-btn">
                    <a>Forget Password</a>
                </div>

            </div>
            <div class="btn-container">
               <input class="login-btn" type="submit" name="Login" value="Login">
            </div>
            <div class="form-link">
              <span>Don't have an account?</span>
              <a href="../../Frontend/form/registration_form.php">Register</a>
            </div>
          </div>  
        </form>
    </div>

</body>
</html>

