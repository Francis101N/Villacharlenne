<?php
session_start();

// Ensure admin is logged in
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

include('connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect form data
    $blog_name        = trim($_POST['blog_name']);
    $blog_description = trim($_POST['blog_description']);

    // Basic validation
    if (empty($blog_name) || empty($blog_description) || empty($date_created)) {
        header("Location: add_news.php?error=Please fill in all fields correctly.");
        exit;
    }

    // Allowed image extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $uploadDir = 'uploads/';

    // Image upload helper
    function uploadImage($fileKey, $allowedExtensions, $uploadDir) {
        if (!isset($_FILES[$fileKey]) || $_FILES[$fileKey]['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $fileTmpPath = $_FILES[$fileKey]['tmp_name'];
        $fileName    = $_FILES[$fileKey]['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            return false;
        }

        $newFileName = uniqid($fileKey . '_', true) . '.' . $fileExtension;
        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            return $newFileName;
        }

        return false;
    }

    // Upload blog image
    $blog_image = uploadImage('blog_image', $allowedExtensions, $uploadDir);

    if (!$blog_image) {
        header("Location: add_news.php?error=Blog image is required and must be a valid image type.");
        exit;
    }

    // Insert into database
    $stmt = $db->prepare("
        INSERT INTO news 
        (title, description, image)
        VALUES (?, ?, ?)
    ");

    $stmt->bind_param(
        "ssss",
        $blog_name,
        $blog_description,
        $blog_image
    );

    if ($stmt->execute()) {
        header("Location: news.php?success=Blog added successfully!");
        exit;
    } else {
        // Delete uploaded image if insert fails
        @unlink($uploadDir . $blog_image);

        header("Location: add_news.php?error=Error saving blog: " . $stmt->error);
        exit;
    }

    $stmt->close();
    $db->close();

} else {
    header("Location: add_news.php");
    exit;
}
?>