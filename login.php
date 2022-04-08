<?php

$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error)
{
    exit();
}

$sql = "CREATE DATABASE IF NOT EXISTS loginDB;";
$conn->query($sql);
$sql = "USE LoginDB";

$sql = "CREATE TABLE IF NOT EXISTS Utenti;";
?>