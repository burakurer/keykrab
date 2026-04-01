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
						<div class="col-sm-12">
							<div class="input-group mb-12">
								<div class="input-group-prepend">
									<span class="input-group-text border" id="basic-addon1">Kategori adı</span>
								</div>
								<input type="text" name="game_name" required id="game_name1" class="form-control border">
							</div>
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