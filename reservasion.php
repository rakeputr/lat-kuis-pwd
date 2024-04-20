<?php include ('./components/header.php') ?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$tanggal = $_POST['tanggalmulai'];
$kota = $_POST['kota'];
$paket = $_POST['paket'];
$destinasi = $_POST['destinasi'];
$jumlah = $_POST['jumlah'];
$catatan = $_POST['catatan'];

echo "<br>" . "<br>" . "<br>" .
  $name . $email . $nohp . $tanggal . $kota . $paket . $destinasi . $jumlah . $catatan;
?>



<?php include ('./components/footer.php') ?>