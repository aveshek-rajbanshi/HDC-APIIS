<?php
include "../../Database/db_connection.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid request.");
}

$Id = (int) $_GET['id']; // cast to int for safety

// Step 1: Update status to 'rejected'
$stmt = $conn->prepare("UPDATE student SET status = 'rejected' WHERE Id = ?");
$stmt->bind_param("i", $Id);

if ($stmt->execute()) {
    // Step 2: Delete that same student
    $delStmt = $conn->prepare("DELETE FROM student WHERE Id = ? AND status = 'rejected'");
    $delStmt->bind_param("i", $Id);

    if ($delStmt->execute()) {
        header("Location: ../../Frontend/admin/admin_pages/student_request.php");
        exit;
    } else {
        echo "Error deleting rejected student: " . $delStmt->error;
    }

    $delStmt->close();
} else {
    echo "Error updating student status: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
