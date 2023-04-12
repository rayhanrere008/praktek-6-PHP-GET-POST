<?php
echo "<center>Nama :".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";

date_default_timezone_set('Asia/Jakarta');

$date = new DateTime('now');
echo "<center>Tanggal :".$date->format('d-m-Y & H:i:s')."</center><br>"
?>