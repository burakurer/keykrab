<?php
require_once 'rootKrab/krabSystem/krabCore.php';
krabDB_Connect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>KeyKrab</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="krabAssets/krabStyle.css">
	<link rel="icon" type="image/png" href="logo.png">
</head>
<body>

	<?php include 'krabHeader.php'; ?>

	<div class="wrapper">
		<h2><strong>KeyKrab Blogs</strong></h2>
		<div class="news">
			<figure class="article">
				<a target="_blank" href="https://kodfaresi.xyz/websitenizi-mobil-uyumlu-hale-getirin/">
					<img src="https://www.mediaclick.com.tr/mp-include/uploads/2019/10/css-nedir.jpg" />
					<figcaption>
						<h3>Websitenizi mobil uyumlu hale getirin!</h3>
						<p>
							Herkese iyi günler, bu yazımda websitenizi nasıl mobil uyumlu yani responsive yapabileceğinizi göstericem. Keyifli okumalar...
						</p>
					</figcaption>
				</a>
			</figure>
		</div>
		<?php
		$category=$db->prepare("SELECT * FROM `category` ORDER BY `category`.`category_name` ASC");
		$category->execute();
		$say=0;
		while ($categoryList=$category->fetch(PDO::FETCH_ASSOC)) { $say++; ?>
			<h2><strong>Ücretsiz Oyunlar<span>(<?php echo $categoryList['category_name']; ?>)</span></strong></h2>
			<div class="cards">
				<?php
				$games=$db->prepare("SELECT * FROM `games` ORDER BY `games`.`game_id` DESC");
				$games->execute();
				$say=0;
				while ($gameList=$games->fetch(PDO::FETCH_ASSOC)) { $say++; 
					if ($gameList['game_platform'] == $categoryList['category_name']) { ?>
						<a target="_blank" href="<?php echo $gameList['game_url']; ?>">
							<figure class="card <?php if ($gameList['game_rgb'] == 1) {echo "box";}  ?>">
								<img <?php if ($gameList['game_expired'] == 1) {echo "class=\"expired\"";} ?> src="<?php echo $gameList['game_picture']; ?>" />
								<figcaption><?php echo $gameList['game_name']; ?></figcaption>
							</figure>
						</a>
					<?php }} ?>
				</div>
			<?php } ?>
		</div>

		<?php include 'krabFooter.php'; ?>

	</body>
	</html>