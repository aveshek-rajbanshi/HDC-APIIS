<?php
// Save as UTF-8 WITHOUT BOM | NO closing 

ini_set('display_errors', 0);
ob_clean();

// Base directory = Backend folder
$baseDir = __DIR__;   // This is already inside Backend

$allowed = [
    'ProjectDetailSubmissionForm' => $baseDir . '/download_Forms/ProjectDetailSubmissionForm.pdf',
    'InternshipForm'              => $baseDir . '/download_Forms/StudentInternshipForm.pdf',
];

$fileKey = $_GET['file'] ?? '';

if (!isset($allowed[$fileKey])) {
    http_response_code(400);
    exit('Invalid file');
}

$filePath = $allowed[$fileKey];

if (!is_file($filePath)) {
    http_response_code(404);
    exit('File not found');
}

$filename = basename($filePath);

header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Content-Length: ' . filesize($filePath));
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

readfile($filePath);
exit;