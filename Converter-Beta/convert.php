<?php
	if(ISSET($_GET['btn_submit'])){
		$digit = $_GET['txt_digit'];
		$currency = $_GET['currency'];
		if($digit != ""){
			switch($currency){
				case "Dollar":
					$output = $digit * 0.067;
					echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
				break;
				
				case "Euro":
					$output = $digit * 0.061;
					echo"<center><label class='text-success' style='font-size:25px;'>&#8364;".$output."</label></center>";
				break;
				
				case "Pound":
					$output = $digit * 0.051;
					echo"<center><label class='text-success' style='font-size:25px;'>&#163;".$output."</label></center>";
				break;
				
				case "Chinese Yuan":
					$output = $digit * 0.43;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
				break;
				
				case "Japanese Yen":
					$output = $digit * 8.23;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
				break;
			}
		}
	}
?>