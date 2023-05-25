<!DOCTYPE html>
    <head>
        <title>Form Data Buku</title>
    </head>
    <body>
    <div class="container">
            <thead class="thead-dark">
              <tr>
                <td><a href="perpus.php"><button type="button" class="btn">Tambah</button></a></td>
              </tr>
              <tr>
              <td> <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('yakin ');"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a></td> 
            </tr>    
            <tr>
            <td><a href="perpus.php"><button type="button" class="btn">Update</button></a></td>
            </tr>
              <table width="700" border="1" cellspacing="1" cellpadding="0">
                <tr bgcolor="#DC9367">
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Kategori</th>
                    <th>Cover</th>
                    </tr>
                    <p></p>
         </body>
</html>
<?php
$file_path = 'data.txt';
    // Membaca isi file
    $file_content = file_get_contents($file_path);

    // Memisahkan data menjadi baris-baris terpisah
    $rows = explode("\n", $file_content);

    foreach ($rows as $row) {
        $data = explode(",", $row);
        echo '<tr>';
        foreach ($data as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
?>
   <tr><br><br><a href="perpus.php">Kembali ke Form</a></tr>

   <tr><br><br><a href="display.php">Data Buku</a></tr>
