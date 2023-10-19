<?php

require_once __DIR__ . "/../../includes/helpers.php";
require_once __DIR__ . "/../../includes/db-connection.php";
session_start();


if (isset($_POST['name']) && $_POST['name'] != '') {
    $query = "INSERT INTO categories (name , created_at) VALUES(?, NOW())";

    $conn->prepare($query)->execute([$_POST['name']]);

    $_SESSION['success'] = "دسته بندی {$_POST['name']} با موفقیت ایجاد شد.";

    redirect('admin/category/index.php');
}

else {
    $_SESSION['error'] = "وارد کردن فیلد نام الزامیست.";
    redirect('admin/category/create.php');
}
