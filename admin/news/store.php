<?php
session_start();
require_once __DIR__ . "/../../includes/helpers.php";
require_once __DIR__ . "/../../includes/db-connection.php";


// dd($_POST);
// dd($_FILES);

if (validate_required($_POST['title']) &&
    validate_required($_POST['category_id']) &&
    validate_required($_POST['body']) &&
    validate_required($_POST['is_publish']) && 
    validate_required($_FILES['image']['name'])
    ) {
    
    extract($_POST);

    // image upload
    $basePath = dirname(dirname(__DIR__));

    $imagePath = "/assets/images/news/";

    $fullPath = $basePath . $imagePath;

    $fileName = date('Y-m-d-H-i-s');

    $extension = str_replace("image/", "", $_FILES['image']['type']);

    $image = $imagePath . $fileName . "." . $extension;

    $user_id = 1;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $fullPath . $fileName . "." . $extension)) {
        $_SESSION['error'] = "آپلود فایل با خطا مواجه شد.";
        redirect('admin/news/create.php');
    }


    $query = "INSERT INTO news (title, body, category_id, user_id, image, is_publish, created_at) VALUES (?,?,?,?,?,?,NOW())";

    $statement = $conn->prepare($query);

    $statement->execute([$title, $body, $category_id, $user_id, $image, $is_publish]);

    $_SESSION['success'] = "خبر $title با موفقیت ایجاد شد";
    redirect('admin/news/index');

}


