<!--

Url:   http://192.168.56.101/omu
Çıktı: OMU nun sayfasi

-->

<?php
	require_once 'F3/F3.php';

	F3::route('GET /omu',
		function() {
			F3::reroute('http://www.omu.edu.tr');
		}
	);

	F3::run();
?>
