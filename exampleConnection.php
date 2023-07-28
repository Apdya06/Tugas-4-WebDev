<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mysql';

// $conn = new mysqli($servername, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: ".$conn->connect_error);
// }
// echo "Connected successfully"; 
// $conn->close();

// $conn = mysqli_connect($servername, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: ". mysqli_connect_error());
// }
// echo "Connected successfully"; 
// mysqli_close($conn);

try {
    $conn = new PDO ("mysql: host=$servername; dbname=$database", $username, $password); 
    echo "Sukses Kenoksi Ke Database $database di $servername.";
    //Menutup koneksi
    $conn = null;
    } catch (PDOException $exception) {
    die("Error Koneksi Ke Database $database :" .  $exception->getMessage());
}