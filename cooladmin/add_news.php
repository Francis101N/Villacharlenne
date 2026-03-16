<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add News / Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl w-full max-w-3xl p-8 m-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Blog</h2>

        <!-- Error Message -->
        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <!-- Success Message -->
        <?php if ($success): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>

        <form action="proc-add-news.php" method="POST" enctype="multipart/form-data">

            <!-- Blog Name -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Blog / News Title</label>
                <input type="text" name="blog_name" required
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>

            <!-- Blog Description -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="blog_description" rows="6" required
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#87ceeb]"></textarea>
            </div>

            <!-- Blog Image -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Blog Image</label>
                <input type="file" name="blog_image" required
                    class="block w-full text-sm text-gray-600
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-[#87ceeb] file:text-white
                    hover:file:bg-black">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-[#87ceeb] text-white font-semibold py-3 px-6 rounded-lg hover:bg-black transition">
                    Add News
                </button>
            </div>

        </form>
    </div>

</body>

</html>