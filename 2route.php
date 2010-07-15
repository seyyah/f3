<!--Usage: 
Url:   http://192.168.56.101/brew/1
Çıktı: http://192.168.56.101/brew/1
http://fatfree.sourceforge.net/#router
-->

<?php
require_once 'F3/F3.php';

F3::route('GET /brew/@count','drink');
	function drink() {
		echo F3::get('PARAMS["count"]').' bottles of beer on the wall.';
	}

F3::run();
?>
