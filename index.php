<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Pendaftaran Pekerja Baru</h2>

     <form action="proses.php" method="POST">
        <table cellpadding="8">
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="email">Alamat Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Bidang Pekerjaan</label></td>
                <td>:</td>
                <td>
                    <select id="pekerjaan" name="pekerjaan">
                        <option value="Kasir">Kasir</option>
                        <option value="Sales">Sales</option>
                        <option value="Pramuniaga Gudang">Pramuniaga Gudang</option>
                        <option value="Supervisor">Supervisor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Kirim Form & Dapatkan Email Konfirmasi</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>