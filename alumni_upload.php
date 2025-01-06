<?php
$jsonFile = 'assets/alumni/alumni.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['picture'])) {
        $targetDir = 'assets/alumni/alumniimg/';
        $fileName = basename($_FILES['picture']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFilePath)) {
            $alumniData = json_decode(file_get_contents($jsonFile), true) ?? [];
            $newAlumnus = [
                "picture" => $targetFilePath,
                "name" => $_POST['name'],
                "description" => $_POST['description']
            ];
            $alumniData[] = $newAlumnus;
            file_put_contents($jsonFile, json_encode($alumniData, JSON_PRETTY_PRINT));
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'File upload failed']);
        }
    } elseif (isset($_POST['deleteAlumnus'])) {
        $deletePicture = $_POST['deleteAlumnus'];
        $alumniData = json_decode(file_get_contents($jsonFile), true) ?? [];
        $updatedAlumniData = array_filter($alumniData, function($alumnus) use ($deletePicture) {
            return $alumnus['picture'] !== $deletePicture;
        });
        file_put_contents($jsonFile, json_encode(array_values($updatedAlumniData), JSON_PRETTY_PRINT));
        if (file_exists($deletePicture)) {
            unlink($deletePicture);
        }
        echo json_encode(['status' => 'success', 'message' => 'Alumnus entry deleted']);
    }
}
?>
