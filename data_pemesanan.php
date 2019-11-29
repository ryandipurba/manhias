<?php
	if($user_id == false){
		$_SESSION["proses_pesanan"] = true;
		
		header("location: ".BASE_URL."index.php?page=login");
		exit;
	}
