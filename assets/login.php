<!DOCTYPE html>
<?php
// uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])){

  // ambil data yang diinputkan user
  $nama_depan = htmlspecialchars( $_POST['nama-depan'], ENT_NOQUOTES );
  $nama_belakang = htmlspecialchars( $_POST['nama-belakang'], ENT_NOQUOTES );
  $alamat= htmlspecialchars( $_POST['alamat'], ENT_NOQUOTES );
  $email = htmlspecialchars( $_POST['email'], ENT_NOQUOTES );
  $no_wa = htmlspecialchars( $_POST['no-wa'], ENT_NOQUOTES );

   // Persiapan query simpan
   $simpan = mysqli_query($koneksi, "INSERT INTO bukutamuttttt VALUES (NULL, '$nama_depan', '$nama_belakang', '$alamat', '$email', '$no_wa')");

  // uji jika simpan data sukses
  if ($simpan){
    echo "<script>alert('Data berhasil disimpan'); document.location='?'</script>";
  }else{
    echo "<script>alert('gagal simpan data');document.location='?'</script>";  
}
}
?>

<html lang="en">
  <head>
    <meta name="author" content="Reyvien Axelliano" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="refresh" content="1" /> -->
    <link rel="shortcut icon" type="image/png" href="/favico/favico.png" />
<link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' >
    <title>Buku Tamu</title>
  </head>
  <body>


    <div class="wrapper">
    <h1>Buku Tamu</h1>
    <h2>Selamat datang di Buku Tamu!</h2>
      <p>Silahkan isi formulir dibawah ini:</p>
      <div class="container">
        <form class="form-s" action="/submit" method="post">

          <!-- Untuk nama depan dan nama belakang -->
          <!-- <form class="form-nama-depan-nama-belakang" action=""> -->
  <div class="nama-depan-nama-belakang tobruts">
    <label for="nama-depan">Nama Depan</label>
    <input
      type="text"
      id="nama-depan"
      name="nama-depan"
      placeholder="Masukkan Nama Depan"
      required
    />
    <label for="nama-belakang">Nama Belakang</label>
    <input
      type="text"
      id="nama-belakang"
      name="nama-belakang"
      placeholder="Masukkan Nama Belakang "
      required
    />
  </div>
<!-- </form> -->



<!-- Untuk No WhatsApp -->
<!-- <form action="" method=""> -->
             <div class="no-wa">
                 <label for="no-wa">No WhatsApp</label>
                 <i class='bx bxl-whatsapp'></i>
                 <input
          type="number"
          id="no-wa"
          name="no-wa"
          placeholder="Masukkan No WhatsApp Anda"
          required
          />
        </div>
      <!-- </form> -->
        
        <!-- Untuk Alamat Email -->
        <!-- <form action=""> -->
         <div class="email">
           <label for="email">Email</label>
           <i class='bx bxs-envelope'></i>
          <input
          type="email"
          name="email"
          id="email"
          placeholder="Masukkan Alamat Email Anda"
          required
          />
          </div>
          
          <!-- Untuk Alamat Rumah -->
           <div class="alamat">
          <label for="alamat">Alamat</label>
          <i class='bx bxs-home' ></i>
          <input
          type="text"
          name="alamat"
          id="alamat"
          placeholder="Masukkan Alamat Rumah Anda"
          required
          />
        </div>
      <!-- </form>  -->

        <!-- Untuk Hari Hadir-->
        <!-- <form action=""> -->
         <div class="hari-tanggal">
            <label for="hari" class="bwah">Hari</label>
            <select  name="hari" id="hari">
              <option value=""></option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
          </select>
             <!-- Untuk Tanggal Hadir -->
          <label for="tanggal" class="hari-tanggal bwah">Tanggal</label>
          <input
          class="input-hadir"
          min="09/05/2024"
          max="09/30/2024"
            type="date"
            name="tanggal"
            id="tanggal"
            required
            />
          </div>
<!-- </form> -->
        
          <!-- Status Pekerjaan -->
          <!-- <form action=""> -->
           <div class="pekerjaan">
            <label for="pekerjaan">Pekerjaan</label>
            <select name="pekerjaan" id="pekerjaan">
              <option value="Pelajar">Pelajar</option>
              <option value="MahaPelajar">MahaPelajar</option>
              <option value="Pengajar">Pengajar</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
        <!-- </form> -->

          <!-- Maksud Kedatangan -->
          <!-- <form action=""> -->
          <div class="maksud">
            <label for="kedatangan">Maksud Kedatangan</label>
            <select name="kedatangan" id="kedatangan">
              <option value="Belajar">Belajar</option>
              <option value="Mengajar">Mengajar</option>
              <option value="Kegiatan">Kegiatan</option>
              <option value="Lainnya">Lainnya</option>
            </select>
              <textarea
              name="maksud"
                id="maksud"
                cols="74"
                rows="0"
                placeholder="Perjelas maksud kedatangan Anda"
                ></textarea>
              </div>
            <!-- </form> -->
            
            <!-- Input button -->
            <form class="form-pengecualian" action="">
              <button type="submit" name="bsimpan" class="btn">
                Masukkan</button>
              </form>
            </form>
          </div>
        </div>
      </body>
      </html>
      
      <!-- Jika ada 2 form dalam 2 elemen input,
        maka data yang terdekat dengan button submit 
        yang diambil datanya -->