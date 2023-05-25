<?php
   // Fungsi untuk menambah data buku
    function addBook($book)
    {
        $file = 'data.txt';
        $handle = fopen($file, 'a');

        if ($handle) {
            fwrite($handle, implode(' - ', $book) . PHP_EOL);
            fclose($handle);
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Gagal menambah data";
        }
    }

    // Form untuk menambah data buku
    if (isset($_POST['add_data'])) {
        $bookToAdd = [
            $_POST['kode_buku'],
            $_POST ['judul_buku'],
            $_POST ['pengarang'],
            $_POST ['penerbit'],
            $tahun_terbit = $_POST ['tahun_terbit'],
            $jumlah_halaman = $_POST ['jumlah_halaman'],
            $kategori = $_POST ['kategori'],
            $cover = $_FILES ['cover'] ['name'],
        ];
          // Menyimpan data ke file
    $file = 'data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Data telah disimpan ke file.";

        $targetDir = 'upload/';
            // Buat direktori 'uploads' jika belum ada
        if (!is_dir($targetDir)) {
            mkdir($targetDir);
        }

        $targetFile = $targetDir . basename($_FILES['cover']['name']);
        $uploadSuccess = move_uploaded_file($_FILES['cover']['tmp_name'], $targetFile);

        if ($uploadSuccess) {
            addBook($bookToAdd);
        } else {
            echo "Gagal mengupload file cover.";
        }}
    echo '<br><br><a href="perpus.php">Kembali ke Form</a>';
    echo '<br><br><a href="display.php">Data Buku</a>';