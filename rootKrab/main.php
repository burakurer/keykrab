<?php
require_once 'krabSystem/krabCore.php';
krabDB_Connect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>KeyKrab</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../krabAssets/krabStyle.css">
	<link rel="icon" type="image/png" href="../logo.png">
</head>
<body>
	<?php include 'krabHeader.php'; ?>

	<div class="container">
		<div class="mid">
			<div class="alert info-panel border" role="alert" style="text-align: center;">
				<img src="../logo.png" width="100" height="100">
				<h4 class="alert-heading"><span class="text">KeyKrab</span> yönetim paneline hoşgeldin {username}</h4>
				<p>Lütfen yeni bir sistem güncellemesi geldiğinde güncellemeye yükleyiniz. Bu güncellemeler sistem iyileştirmesi, güvenlik yamaları, yeni özellikler içerir.</p>
				<hr>
				<p>Şuanki php sürümünüz: <code><?php echo phpversion(); ?></code><br>Şuanki sistem sürümü: <code>beta version v0.1</code></p>
				<p class="mb-0">Şuan bir sistem güncellemesi bulunmuyor</p>
			</div>
			<center>
				<div style="word-spacing: 15px">
					<button type="button" class="btn btn-outline-dark btn-lg border">Oyunları görüntüle</button>
					<a href="add-game"><button type="button" class="btn btn-outline-dark btn-lg border">Oyun ekle</button></a>
					<a href="add-category"><button type="button" class="btn btn-outline-dark btn-lg border">Kategori ekle</button></a>
					<button type="button" class="btn btn-outline-dark btn-lg border">Güvenlik işlemleri</button>
					<a href="system"><button type="button" class="btn btn-outline-dark btn-lg border">Sistem ayarları</button></a>
				</div>
			</center>
		</div>
	</div>
	<?php include 'krabFooter.php'; ?>
</body>
</html>