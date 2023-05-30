<?php
// MENGIRIM IP ADDRESS KE WEB API
$ip = $_SERVER['REMOTE_ADDR'];
$url = 'http://ip-api.com/json/'.$ip;

// MEMPROSES DATA
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

// MENDAPATKAN DATA KORBAN
$alex = json_decode($data, TRUE);
?>