<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/db-connection.php";

function asset($path)
{
    return APP_URL . $path;
    // app_url = http://localhost:8000/
    // path : assets/admin/css/main.css
}

function url($path)
{
    return APP_URL . $path;
}

function redirect($path)
{
    header("Location: " . APP_URL . $path);
    exit;
}


function dd($data)
{
    // dump and die
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function validate_required($value)
{
    return isset($value) && $value !== '';
}

function select($table, $fields = [])
{
    global $conn;

    $fields = empty($fields) ? "*" : explode(',', $fields);

    $query = "SELECT $fields FROM $table";
    // SELECT firstname,lastname,... FROM table;
    // SELECT * FROM table;

    $statement = $conn->prepare($query);
    $statement->execute();

    return $statement->fetchAll();

}

function find($table, $id)
{
    global $conn;

    $query = "SELECT * FROM $table WHERE id = :id";

    $statement = $conn->prepare($query);

    $statement->bindParam(":id", $id);

    $statement->execute();
    // $statement->execute([$id]]);

    return $statement->fetch(PDO::FETCH_OBJ);

}

function raw($sql)
{
    global $conn;
    $statement = $conn->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $results;
}