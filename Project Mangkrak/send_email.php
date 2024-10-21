<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email tujuan
    $to = "sevenrelzz@gmail.com"; // Ganti dengan alamat email kamu

    // Subjek email
    $subject = "Pesan Baru dari $name";

    // Pesan email
    $email_message = "Nama: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Pesan:\n$message\n";

    // Header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Kirim email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Pesan Anda telah berhasil dikirim!";
    } else {
        echo "Maaf, pesan gagal dikirim.";
    }
}
?>