<?php
/*
* keyKrab © 2020
* krabCore version 0.1
* Developer by R6w[M]uhammet
* kodfaresi.xyz & mami.wtf
*/
function krabDB_Connect(){
	try {
		global $db;
		$db = new PDO("mysql:host=db;dbname=keykrab;charset=utf8;", "root", "keykrab");
	} catch (PDOException $error) { ?>
		<div class="alert alert-danger alert-dismissible mb-2" role="alert">
			<h1 class="alert-heading mb-2">Kritik sistem hatası</h1>
			<p><b>Sisteminizde kritik bir hata var gibi görünüyor</b></p>
			<h3 class="alert-heading"><u>keyKrab Çıktısı</u></h3>
			<div style="border: 1px solid white; padding: 10px; ">
				<p>Çıktı zamanı: <game class="danger"><?php date_default_timezone_set('Europe/Istanbul'); echo date("H:i - d-m-Y"); ?></game></p>
				<p>Hata kodu:<br><game class="danger"><?php echo $error; ?></game></p> <!-- editlenecek -->
			</div>
		</div>
	<?php }
}
?>