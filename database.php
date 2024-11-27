<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'gmyfit'; 


function connection() {
    global $host, $username, $password, $database;
    $conn = new mysqli($host, $username, $password, $database, 3307);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    return $conn;
}

// function connection() : SQLite3 {
//     return new SQLite3('database.db');
// }

//recebe a declaração SQL e o banco de dados
function find ($query) {    
    return $connection->query($query);
}

function save ($query) {
    return $connection->query($query);    
}

//obtém uma conexão com o banco de dados
$connection = connection();

$connection->query(
    "CREATE TABLE IF NOT EXISTS plans(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        planName TEXT,
        planDuration INT,
        planCost FLOAT)"
);

//cria as tabelas de usuário
$connection->query(
    "CREATE TABLE IF NOT EXISTS members(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name TEXT,
        user TEXT,
        age INT,
        email TEXT,
        password TEXT,
        type TEXT, 
        plan INT,
        foreign key (plan) references plans(id))"
);

$connection->query(
    "CREATE TABLE IF NOT EXISTS partners(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name TEXT,
        age INT,
        email TEXT,
        function TEXT)"
);

$connection->query(
    "CREATE TABLE IF NOT EXISTS products(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name TEXT,
        description INT,
        supplier TEXT,
        price INT)"
);

?>