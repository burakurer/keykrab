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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../krabAssets/krabStyle.css">
	<link rel="icon" type="image/png" href="../logo.png">
</head>
<body>
	<?php include 'krabHeader.php'; ?>

	<div class="container">
		<div class="mid">
			<h1 class="display-4">Yeni oyun ekle</h1>
			<p class="lead">
				Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
			</p>
			<form method="POST" action="krabSystem/krabData.php">
				<div class="alert info-panel border" role="alert">
					<div class="row align-items-center">
						<div class="col-sm-4">
							<div class="cards">
								<a target="_blank" id="game_url" href="#">
									<figure class="card" id="card">
										<img id="game_picture" src="../krabAssets/images/nogame.png"/>
										<figcaption id="game_name"></figcaption>
									</figure>
								</a>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text border" id="basic-addon1">Oyun adı</span>
								</div>
								<input type="text" name="game_name" required id="game_name1" class="form-control border">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text border" id="basic-addon1">Oyun resmi</span>
								</div>
								<input type="url" name="game_picture" required id="game_picture1" class="form-control border">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text border" id="basic-addon1">Oyun linki</span>
								</div>
								<input type="url" name="game_url" required id="game_url1" class="form-control border">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text border" for="inputGroupSelect01">Oyun platformu</label>
								</div>
								<select class="custom-select border" name="game_platform" id="inputGroupSelect01">
									<option value="steam" selected>Steam</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<input class="tgl tgl-ios box" name="game_rgb" id="rgb" type="checkbox"/>
							<label class="tgl-btn box" for="rgb" style="float: left;"></label>
							<span style="padding: 10px; vertical-align: middle;" class="text">RGB Modu</span>
						</div>
					</div>
				</div>
				<div class="space float-right">
					<a href="main"><button type="button" class="cancel">İptal et</button></a>
					<button type="submit" name="add_game" class="save">Kaydet</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="krabAssets/krab.js"></script>
	<?php include 'krabFooter.php'; ?>
</body>
</html>