<?php
require_once __DIR__ . "/../../includes/helpers.php";
require_once __DIR__ . "/../../includes/db-connection.php";
session_start();

extract($_POST);
if (isset($_POST['name']) && $_POST['name'] != '') {


    $query = "UPDATE categories SET name = ? , updated_at = NOW() WHERE id = ?";

    $conn->prepare($query)->execute([$name, $id]);

    $_SESSION['success'] = "دسته بندی $name با موفقیت ویرایش شد.";

    redirect('admin/category/index.php');
}
else {
    $_SESSION['error'] = "وارد کردن فیلد نام الزامیست.";
    redirect("admin/category/edit.php?id=$id");
}
