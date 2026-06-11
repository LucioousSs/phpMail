<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $nama  = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $pekerjaan = isset($_POST['pekerjaan']) ? htmlspecialchars($_POST['pekerjaan']) : '';


    if (empty($nama) || empty($email) || empty($pekerjaan)) {
        echo "Error: Kolom Nama, Email, dan Bidang Pekerjaan wajib diisi!";
        exit;
    }


    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'toko-kariasa@gmail.com'; // Bisa diubah dengan email lain
        $mail->Password   = 'testing';  // Ganti dengan password email yang valid
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

       
        $mail->setFrom('toko-kariasa@gmail.com', 'Panitia Penerimaan Pekerja Baru');
        $mail->addAddress($email, $nama);                      
        $mail->addReplyTo('infotokokariasa@gmail.com', 'Informasi Toko Kariasa');

        
        $mail->isHTML(true);
        $mail->Subject = "Konfirmasi Pendaftaran Pekerja Baru - " . $nama;
        
       
        $mail->Body    = "
        <h3>Pendaftaran Berhasil!</h3>
        <p>Halo <strong>" . $nama . "</strong>,</p>
        <p>Terima kasih telah mendaftar di Toko Kariasa.</p>";

        $mail->send();
        echo "Sukses: Email konfirmasi pendaftaran berhasil dikirim ke " . $email . "!";
        
    } catch (Exception $e) {
        echo "Gagal: Email tidak dapat dikirim. PHPMailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Metode pengiriman salah.";
}
?>