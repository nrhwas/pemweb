<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "datapegawai");
// ambil data dari pegawai

$result = mysqli_query($conn, "SELECT * FROM datapgw");

?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Data pegawai</title>
    </head>
    <body>

    <h1>Daftar Pegawai</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        
        <tr>
            <td><strong>No.</strong></td>
            <td><strong>Nama</strong></td>
            <td><strong>No.telp</strong></td>
            <td><strong>Alamat</strong></td>
            <td><strong>Keterangan</strong></td>
        </tr>
        
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ):?> 
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $row["Nama"]; ?></td>
            <td><?php echo $row["No.Telp"]; ?></td>
            <td><?php echo $row["ALAMAT"]; ?></td>
            <td>
                <a href="">Change</a> |
                <a href="">Save</a> |
                <a href="">Delete</a>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
        
    </body>
    </html>