<!--
1)

Url:   http://192.168.56.101/
Çıktı: We rock!We roll....

2)

Url:   http://192.168.56.101/
Çıktı: We rock!What's a rattle?We roll....

-->

<?php
	require_once 'F3/F3.php';

	F3::route('GET /','rock|roll');
	function rock() {
		echo 'We rock!';
	}
	function roll() {
		echo 'We roll...';
	}

	F3::route('GET /barrel','rock|rattle|roll');
	function rattle() {
		echo 'What\'s a rattle?';
	}

	F3::run();
?>
