<!DOCTYPE html>
<html>
<head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
    <body>
        <h2>Data Buku Perpustakaan</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <tr>
        <td>
            <label for="kode_buku">Kode Buku:</label>
        </td>
        <td>
            <input type="text" name="kode_buku" id="kode_buku"><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="judul_buku">Judul Buku:</label>
        </td>
        <td>
            <input type="text" name="judul_buku" id="judul_buku"><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="pengarang">Pengarang:</label>
        </td>
        <td>
            <input type="text" name="pengarang" id="pengarang"><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="penerbit">Penerbit:</label>
        </td>
        <td>
            <input type="text" name="penerbit" id="penerbit"><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="tahun_terbit">Tahun Terbit:</label>
        </td>
        <td>
            <input type="number" name="tahun_terbit" id="tahun_terbit"><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="jumlah_halaman">Jumlah Halaman:</label>
        </td>
        <td>
            <input type="number" name="jumlah_halaman" id="jumlah_halaman"><br><br>
        </td>
    </tr> 
    <tr>
        <label for="kategori">Kategori:</label>
        <select id="kategori" name="kategori">
             <option value="Novel">1. Novel</option>
             <option value="Majalah">2. Majalah</option>
             <option value="Biografi">3. Biografi</option>
             <option value="Ensiklopedia">4. Ensiklopedia</option>
             <option value="Kamus">5. Kamus</option>
             <option value="Lainnya">6. Lainnya</option>
         </select><br><br>
        </tr>
    <tr>
        <td>
        <label for="cover">Cover:</label>
        </td>
        <td>
        <input type="file"  name="cover"/><br><br>
        </td>
        </tr>
        <p></p>
                        <tr>
                            <td>
                                <input type="submit" name="update" value="Update">   
                                <input type = "reset" value = "Reset"/>
                            </td>
                        </tr>
                    </form>
</body>
</html>