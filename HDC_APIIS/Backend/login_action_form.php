<?php

// database connection
require_once "../Database/db_connection.php";

//starting session
session_start();

// checking the form submission.
if(isset($_POST['Login'])){

    $user_email      = $_POST['user_email'];
    $user_password   = $_POST['password'];
    $user_role       = $_POST['role'];

    //defining the table accoding to the user-based-role
    $table;
    switch($user_role){
        case 'admin':
            $table = 'admin';
            break;
        case 'sub-admin':
            $table = 'sub_admin';
            break;
        case 'teacher':
            $table = 'supervisor';
            break;
        case 'student':
            $table = 'student';
            break;
        default:
            die("Invalid user role selected");
            break;
    }


    // now, getting requested user from table according to the role.
    $sqlQuery = "SELECT * FROM $table WHERE Email = '$user_email' LIMIT 1";
    // executing the mysql query
    $getUser = mysqli_query($conn, $sqlQuery);

    if(mysqli_num_rows($getUser) > 0){
        $user = mysqli_fetch_assoc($getUser);

        // verify the user password by the help of BCRYPT
        if(password_verify($user_password, $user['Password'])){

            //for the case of student only.
            $role   = $user_role;
            $status = $user['status'];

            if($role == "student"){
                if($status == "pending"){
                    header("Location: ../Frontend/admin/admin_pages/student_waitingpage.php");
                    exit;
                }else if($status == "rejected"){
                     header("Location: ../Frontend/admin/admin_pages/student_reject.php");
                }else if($status == "approval"){
                    // student is approved by admin so, he/she can login or redirect to dashboard.
                     $_SESSION['userId']    = $user['Id'];
                     $_SESSION['userEmail'] = $user['Email'];
                     $_SESSION['userName']  = $user['Full_Name'];
                     $_SESSION['userRole']  = $user_role;

                     header("Location: ../Frontend/dashboards/student_dashboard.php");
                     exit;
                }

            }

            //for the case of handling admin, sub-admin and teacher.
            switch($role){
                case 'admin':
                     $_SESSION['$userId']    = $user['Id'];
                     $_SESSION['$userEmail'] = $user['Email'];
                     $_SESSION['$userName']  = $user['Full_Name'];
                     $_SESSION['$userRole']  = $user_role;
                     header("Location: ../Frontend/dashboards/admin_dashboard.php");
                     break;
                case 'sub_admin':
                     $_SESSION['$userId']    = $user['Id'];
                     $_SESSION['$userEmail'] = $user['Email'];
                     $_SESSION['$userName']  = $user['Full_Name'];
                     $_SESSION['$userRole']  = $user_role;
                     header("Location: ../Frontend/dashboards/admin_dashboard.php");
                     break;
                case 'supervisor':
                     $_SESSION['$userId']    = $user['Id'];
                     $_SESSION['$userEmail'] = $user['Email'];
                     $_SESSION['$userName']  = $user['Full_Name'];
                     $_SESSION['$userRole']  = $user_role;
                     header("Location: ../Frontend/dashboards/supervisor_dashboard.php");
                     break;
                default:
                    die("Invalid user role selected");
                    break;
            }
            exit;
            
        }else{
            echo "Invalid useremail and password.";
        }
    }else{
        // if($user_role == "student"){
        //      header("Location: ../Frontend/admin/admin_pages/student_reject.php");
        //     exit;
        // }
        echo "User not found!";
    }

}else{
    echo "form not submitted.";
}



?>



<!-- //storing user information in the session
            $_SESSION['$userEmail'] = $user['Email'];
            $_SESSION['$userName']  = $user['Full_Name'];
            $_SESSION['$userRole']  = $user_role;
            
            // redirect the user according to the role
            if($user_role == "admin"){
                header("Location: ../Frontend/dashboards/admin_dashboard.php");
            }else if($user_role == "sub_admin"){
                header("Location: ../Frontend/dashboards/admin_dashboard.php");
            }else if($user_role == "teacher"){
                header("Location: ../Frontend/dashboards/teacher_dashboard.php");
            }else{
                header("Location: ../Frontend/dashboards/student_dashboard.php");
            } -->