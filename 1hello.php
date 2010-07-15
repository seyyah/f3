<?php

require_once 'F3/F3.php';
F3::route('GET /','home');
	function home() {
		echo 'Hello, world!';
	}
F3::run();
?>
