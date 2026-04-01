<?php
/*
* keyKrab © 2020
* krabCore version 0.1
* Developer by R6w[M]uhammet
* kodfaresi.xyz & mami.wtf
*/
require_once 'krabCore.php';
krabDB_Connect();
// log db eklencek
// logincontrol eklencek
// secure login eklencek

if (isset($_POST['add_game'])) {
	// ob_start();
	// session_start();
	krabDB_Connect();
	if (strlen($_POST['game_name']) > 1){
		if (strlen($_POST['game_picture']) > 1){
			if($query = $db->prepare("INSERT INTO games SET game_name =:name, game_picture =:picture, game_url=:url, game_platform=:platform, game_expired=:expired, game_rgb=:rgb, game_adate=:adate")){
				$game_name = htmlspecialchars($_POST['game_name']);
				$game_picture = htmlspecialchars($_POST['game_picture']);
				$game_url = htmlspecialchars($_POST['game_url']);
				$game_platform = htmlspecialchars($_POST['game_platform']);
				date_default_timezone_set('Europe/Istanbul');
				$game_rgb = htmlspecialchars($_POST['game_rgb']);
				$game_adate = date('H:i d.m.Y');
				$result = $query->execute(array( 
					'name' => $game_name,
					'picture' => $game_picture,
					'url' => $game_url,
					'platform' => $game_platform,
					'expired' => 0,
					'rgb' => $game_rgb,
					'adate' => $game_adate
				)); 
				if($result){
					header('Location:../add-game?x=success');
				}
				else{
					header('Location:../add-game?x=error');
				}
			}else{
				header('Location:../add-game?x=error');
			}
		}else{
			header('Location:../add-game?x=error');
		}
	}else{
		header('Location:../add-game?x=error');
	}
}
if (isset($_POST['add_category'])) {
	// ob_start();
	// session_start();
	krabDB_Connect();
	if (strlen($_POST['category_name']) > 1){
		if($query = $db->prepare("INSERT INTO category SET category_name =:name")){
			$category_name = htmlspecialchars($_POST['category_name']);
			$result = $query->execute(array( 
				'name' => $category_name
			)); 
			if($result){
				header('Location:../add-category?x=success');
			}
			else{
				header('Location:../add-category?x=error');
			}
		}else{
			header('Location:../add-category?x=error');
		}
	}else{
		header('Location:../add-category?x=error');
	}
}
?>