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
				<h1 class="display-4">Sistem ayarları</h1>
				<p class="lead">
					Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
				</p>
			<div class="alert info-panel border" role="alert">
				<div class="row align-items-center">
					<div class="col-sm-10">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="col-sm-2">
						<div class="checkbox">
							<input class="tgl tgl-ios" id="input1" type="checkbox"/>
							<label class="tgl-btn" for="input1"></label>
						</div>
					</div>
				</div>
				<hr>
				<div class="row align-items-center">
					<div class="col-sm-10">
						Lorem ipsum dolor sit amet, consectetur adipisupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="col-sm-2">
						<div class="checkbox">
							<input class="tgl tgl-ios" id="input2" type="checkbox"/>
							<label class="tgl-btn" for="input2"></label>
						</div>
					</div>
				</div>
				<hr>
				<div class="row align-items-center">
					<div class="col-sm-10">
						Lored m ipsum dolor sidwad t amet, consectetur adipisupddd  in culpa qudawd i officia deserunt mollit anim id est laborum.
					</div>
					<div class="col-sm-2">
						<div class="checkbox">
							<input class="tgl tgl-ios" id="input3" type="checkbox"/>
							<label class="tgl-btn" for="input3"></label>
						</div>
					</div>
				</div>
			</div>
			<div class="space float-right">
				<button type="button" class="cancel">İptal et</button>
				<button type="button" class="save">Kaydet</button>
			</div>
		</div>
	</div>
	<?php include 'krabFooter.php'; ?>
</body>
</html>