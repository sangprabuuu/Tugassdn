<?php
session_start();

// Menghubungkan ke database
$servername = "localhost";
$username = "sal41631_admin_workgank";
$password = "qH4&,7D!csJb";
$dbname = "sal41631_workgank";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form login
$user = $_POST['username'];
$pass = $_POST['password'];

// Mencegah SQL injection
$user = $conn->real_escape_string($user);
$pass = $conn->real_escape_string($pass);

// Mengambil data user dari database
$sql = "SELECT * FROM user WHERE username='$user'";
$result = $conn->query($sql);

// Memeriksa apakah user ada di database
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Memverifikasi password
    if (password_verify($pass, $row['password'])) { // Asumsi password disimpan dalam bentuk hash
        // Set session
        $_SESSION['username'] = $user;
        $_SESSION['logged_in'] = true;

        // Redirect ke halaman dashboard
        header("Location: admin/page.php?mod=home");
    } else {
        // Password salah
        echo "<script>
                alert('Password salah!');
                window.location.href='login.php';
              </script>";
    }
} else {
    // User tidak ditemukan
    echo "<script>
            alert('Username tidak ditemukan!');
            window.location.href='login.php';
          </script>";
}

$conn->close();
?>
