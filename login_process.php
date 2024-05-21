<?php
// Lakukan koneksi ke database di sini

// Contoh koneksi ke database MySQL
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];---

// Lakukan query ke database untuk memeriksa login
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login berhasil
    header("Location: iindex.html"); // Redirect ke halaman index.html
    exit();
} else {
    // Login gagal
    echo "Login failed. Please check your username and password.";
}

$conn->close();
?>
