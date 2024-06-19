<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Kirim email atau simpan data ke database
    // Contoh mengirim email
    $to = "contact@tokobajuonline.com";
    $subject = "Pesan baru dari $name";
    $body = "Nama: $name\nEmail: $email\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan, pesan tidak dapat dikirim.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
