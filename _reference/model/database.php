<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=kbsmith01_my_guitar_shop2';
$username = 'kbsmith01_user1';
$password = 'Mynewpassword2';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>
