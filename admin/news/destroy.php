<?php

require_once __DIR__ . "/../../includes/helpers.php";
require_once __DIR__ . "/../../includes/db-connection.php";
session_start();

extract($_POST);

$query = "SELECT * FROM news WHERE id = ?";

$statement = $conn->prepare($query);

$statement->execute([$id]);

$news = $statement->fetch(); 

if (empty($news)) {
    redirect('admin/news/index.php');
}

$imageAddress = dirname(dirname(__DIR__)) . $news['image'];

if (file_exists($imageAddress)) {
    unlink($imageAddress);
}

$deleteQuery = "DELETE FROM news WHERE id = ?";

$deleteStatement = $conn->prepare($deleteQuery);

$deleteStatement->execute([$id]);

$_SESSION['success'] = "خبر {$news['name']} با موفقیت حذف شد.";

redirect('admin/news/index.php');
