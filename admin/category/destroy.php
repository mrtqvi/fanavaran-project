<?php

require_once __DIR__ . "/../../includes/helpers.php";
require_once __DIR__ . "/../../includes/db-connection.php";
session_start();

extract($_POST);

$query = "SELECT * FROM categories WHERE id = ?";

$statement = $conn->prepare($query);

$statement->execute([$id]);

$category = $statement->fetch(); 

if (empty($category)) {
    redirect('admin/category/index.php');
}

$deleteQuery = "DELETE FROM categories WHERE id = ?";

$deleteStatement = $conn->prepare($deleteQuery);

$deleteStatement->execute([$id]);

$_SESSION['success'] = "دسته بندی {$category['name']} با موفقیت حذف شد.";

redirect('admin/category/index.php');

