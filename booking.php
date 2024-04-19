<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>kelana</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php include ('./components/navbar.php') ?>
  <h1 class="text-white text-bold text-center mt-2">KELANA'S RESERVATION FORM</h1>
  <section class="d-flex w-100 min-vw-100 justify-content-center">
    <form id="booking" method="POST" action="reservasion.php">
      <div class="mb-3">
        <label for="name" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Email">
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">WA/No. Telepon</label>
        <input type="text" class="form-control" id="nohp" aria-describedby="noHelp"
          placeholder="Masukkan Nomor Telepon/WA">
        <div id="noHelp" class="form-text">Pastikan nomor telepon/WA aktif karena digunakan untuk konfirmasi pesanan
          anda
        </div>
      </div>
      <div class="mb-3">
        <label for="tanggalmulai" class="form-label">Tanggal Perjalanan</label>
        <input type="date" class="form-control" id="tanggalmulai">
      </div>
      <div class="mb-3">
        <label for="kota" class="form-label">Asal Kota</label>
        <input type="text" class="form-control" id="kota" placeholder="Masukkan Asal Kota">
      </div>
      <div class="mb-3">
        <label for="paket" class="form-label">Pilihan Paket Wisata</label>
        <select class="form-control" id="paket" name="paket" form="booking">
          <option value="Self Discovery Escape">Self Discovery Escape - Rp. 275.000,00 </option>
          <option value="Couple's Paradise">Couple's Paradise - Rp. 520.000,00 </option>
          <option value="Family Fun Adventures">Family Fun Adventures - Rp. 1.225.000,00 </option>
          <option value="Regular Group">Regular Group - Rp. 2.300.000,00 </option>
          <option value="Large Group">Large Group - Rp. 3.300.000,00 </option>
        </select>
      </div>
      <div class="mb-3">
        <label for="destinasi" class="form-label">Destinasi Wisata</label>
        <select class="form-control" id="destinasi" name="destinasi" form="booking">
          <option value="Sleman">Sleman</option>
          <option value="Yogyakarta">Yogyakarta</option>
          <option value="Kulon Progo">Kulon Progo</option>
          <option value="Bantul">Bantul</option>
          <option value="Gunung Kidul">Gunung Kidul</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah Peserta</label>
        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Peserta Dewasa dan Anak">
      </div>
      <div class="mb-3">
        <label for="catatan" class="form-label">Catatan</label>
        <input type="text" class="form-control" id="catatan" placeholder="Masukkan Catatan (jika ada)">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>

</html>