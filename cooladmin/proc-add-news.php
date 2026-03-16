<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_name = trim($_POST['blog_name']);
    $blog_description = trim($_POST['blog_description']);

    if (empty($blog_name) || empty($blog_description)) {
        header("Location: add_news.php?error=Please fill in all fields.");
        exit;
    }

    // Check if file exists
    if (!isset($_FILES['blog_image']) || $_FILES['blog_image']['error'] !== 0) {
        header("Location: add_news.php?error=Blog image is required.");
        exit;
    }

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileTmpPath = $_FILES['blog_image']['tmp_name'];
    $fileName = $_FILES['blog_image']['name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileExt, $allowedExtensions)) {
        header("Location: add_news.php?error=Invalid image type. Only jpg, jpeg, png, gif allowed.");
        exit;
    }

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $newFileName = uniqid('blog_', true) . '.' . $fileExt;
    $destPath = $uploadDir . $newFileName;

    if (!move_uploaded_file($fileTmpPath, $destPath)) {
        header("Location: add_news.php?error=Failed to upload image.");
        exit;
    }

    // Insert into database
    $stmt = $db->prepare("INSERT INTO news (title, description, blog_img, date_created) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $blog_name, $blog_description, $newFileName);

    if ($stmt->execute()) {
        header("Location: news.php?success=Blog added successfully!");
        exit;
    } else {
        @unlink($destPath);
        header("Location: add_news.php?error=Error saving blog: " . $stmt->error);
        exit;
    }
}
?>