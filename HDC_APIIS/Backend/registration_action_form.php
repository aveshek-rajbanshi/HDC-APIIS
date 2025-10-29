<?php 

// database connection
require_once "../Database/db_connection.php";

// checking the form submission.
if(isset($_POST['Register'])){
    
    // Accessing the form data
    $student_fullname = $_POST['std_name'];
    $student_email    = $_POST['std_email'];
    $password         = $_POST['password'];
    $comform_password = $_POST['comform_password'];
    $gender           = $_POST['gender'];
    $dob              = $_POST['dob'];
    $address          = $_POST['address'];
    $phone_number     = $_POST['phone_number'];
    $crn              = $_POST['std_crn_number'];
    $batch            = $_POST['std_batch'];
    $program          = $_POST['program'];
    $semester         = $_POST['semester'];
    // $profile_picture  = $_POST['profile_picture'];

    if($password !== $comform_password){
        die("Password do not match!");
    }

    // hashing the password by using (BCRYPT) techinque
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // data insertion by using prepare query statement
    $stmt = $conn->prepare("INSERT INTO student(Full_Name, Email, Password, Gender, DOB, Address, Phone_Number, CRN, Batch, Program, Semester)
    VALUES(?,?,?,?,?,?,?,?,?,?,?)");

    if(!$stmt){
        die("Prepare failed: ". $conn->error());
    }


    $stmt->bind_param(
        "sssssssssss",
        $student_fullname,
        $student_email,
        $hashed_password,
        $gender,
        $dob,
        $address,
        $phone_number,
        $crn,
        $batch,
        $program,
        $semester
   );

    // Execute statement
    if ($stmt->execute()) {
        header("Location: ../Frontend/form/login_form.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

}else{
    echo "Form data is not submitted.";
}


?>