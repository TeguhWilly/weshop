<?php

	define("BASE_URL", "http://willy-store.uk/weshop/");

	function rupiah($nilai = 0){
		$string = "Rp," . number_format($nilai);
		return $string;
	}

?>