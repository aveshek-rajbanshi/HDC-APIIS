<?php
include "../../Database/db_connection.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid request.");
}


$Id = (int) $_GET['id']; // cast to int for extra safety purpose.

$stmt = $conn->prepare("UPDATE student SET status = 'approval' WHERE Id = ?");
$stmt->bind_param("i", $Id);

if ($stmt->execute()) {
    header("Location: ../../Frontend/admin/admin_pages/student_request.php?id=$Id");
    exit;
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
