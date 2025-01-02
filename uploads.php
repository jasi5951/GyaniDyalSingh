<?php
// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    // Define target directories
    $targetDir = '';
    $fileType = $_POST['fileType']; // 'video' or 'audio'

    if ($fileType === 'video') {
        $targetDir = 'assets/recordings/video/';
    } elseif ($fileType === 'audio') {
        $targetDir = 'assets/recordings/audio/';
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
        exit;
    }

    // Check if file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES['file']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Move uploaded file to the target directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully', 'filePath' => $targetFilePath]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to move the uploaded file']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'File upload error']);
    }
}

// Handle file deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteFile'])) {
    $deleteFile = $_POST['deleteFile']; // Path of the file to delete

    if (file_exists($deleteFile)) {
        if (unlink($deleteFile)) {
            echo json_encode(['status' => 'success', 'message' => 'File deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete the file']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'File not found']);
    }
}
?>
