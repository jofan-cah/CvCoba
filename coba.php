<?php
$nama = $_POST['nama'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['messages'];

$headers .= 'From: <jofan.fathurahman@gmail.com>' . "rn"; //bagian ini diganti sesuai dengan email dari pengirim
$maill = mail($to, $subject, $messages, $headers . phpversion());
if ($maill) {
    echo "pengiriman berhasil";
} else {
    echo "pengiriman gagal";
}
