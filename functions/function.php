<?php
function getFood()
{
    $conn = new mysqli("localhost", "klimoff0606", "kliZ0DataBase01", "klimoff0606");

    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM orders");

    $conn->close();

    return resultToArray($result);
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }

    return $array;
}
