<?php
// Define JSON file paths
$videoJsonFile = 'assets/recordings/videos.json';
$audioJsonFile = 'assets/recordings/audios.json';

// Ensure JSON files exist
if (!file_exists($videoJsonFile)) {
    file_put_contents($videoJsonFile, json_encode([]));
}
if (!file_exists($audioJsonFile)) {
    file_put_contents($audioJsonFile, json_encode([]));
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    // Define target directories
    $targetDir = '';
    $fileType = $_POST['fileType']; // 'video' or 'audio'

    if ($fileType === 'video') {
        $targetDir = 'assets/recordings/video/';
        $jsonFile = $videoJsonFile;
    } elseif ($fileType === 'audio') {
        $targetDir = 'assets/recordings/audio/';
        $jsonFile = $audioJsonFile;
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
            // Load existing data from the appropriate JSON file
            $data = json_decode(file_get_contents($jsonFile), true);

            // Add new entry
            $title = $_POST['title'] ?? $fileName; // Default title if not provided
            $description = $_POST['description'] ?? ''; // Default empty description
            $newEntry = [
                'title' => $title,
                'description' => $description,
                'filePath' => $targetFilePath
            ];
            $data[] = $newEntry;

            // Save updated data back to JSON file
            file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

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
