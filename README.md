# phpMail

Form pendaftaran pekerja baru yang mengirim email konfirmasi otomatis memakai **PHPMailer** lewat SMTP Gmail.

## Alur

1. `index.php` menampilkan form: Nama Lengkap, Alamat Email, dan Bidang Pekerjaan.
2. Data dikirim dengan method `POST` ke `proses.php`.
3. `proses.php` memvalidasi input, lalu mengirim email konfirmasi ke alamat pendaftar.

## Tech Stack

- PHP
- PHPMailer 7, dipasang lewat Composer
- SMTP Gmail (`smtp.gmail.com`, port 587, STARTTLS)

## Menjalankan

1. Pasang dependency.

   ```bash
   composer install
   ```

2. Isi kredensial SMTP di `proses.php`.

   ```php
   $mail->Username = 'email-anda@gmail.com';
   $mail->Password = 'app-password-anda';
   ```

   Untuk Gmail, pakai **App Password**, bukan password akun biasa.

3. Jalankan lewat local server seperti Laragon atau XAMPP, lalu buka `index.php`.

## Validasi Input

- `nama` dan `pekerjaan` dibersihkan dengan `htmlspecialchars()`
- `email` difilter dengan `FILTER_SANITIZE_EMAIL`
- Ketiga kolom wajib diisi

## Catatan Keamanan

Kredensial SMTP ditulis langsung di `proses.php`. Sebaiknya dipindah ke file `.env` atau environment variable supaya tidak ikut ter-commit.

## Screenshot

<img width="775" height="282" alt="image" src="https://github.com/user-attachments/assets/8ed52ddb-84c2-4c3c-ad34-66410a013902" />

<img width="831" height="238" alt="image" src="https://github.com/user-attachments/assets/3f515f5b-6d7a-44c2-b76c-c507fee90baa" />
