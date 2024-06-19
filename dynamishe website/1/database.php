<?php
$servername = "localhost";
$username = "root";
$password = "root";

/** @var PDO $conn */
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Connection failed: " . $ex->getMessage();
    header("", response_code: 500);
}



function SendCommand(string $command): PDOStatement
{
    global $conn;
    try {
        // use exec() if no results are returned
        // use query() if results are returned
        return $conn->query($command);
    } catch(PDOException $e) {
        echo $command . "<br>" . $e->getMessage();
        header("", response_code: 500);
        exit();
    }
}
function SendPrepared(string $command, array $arguments): PDOStatement
{
    global $conn;
    try {
        $statement = $conn->prepare($command);
        $statement->execute($arguments);
        return $statement;
    } catch(PDOException $e) {
        echo $command . "<br>" . $e->getMessage();
        header("", response_code: 500);
        exit();
    }
}