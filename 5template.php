<!--

Url:   http://192.168.56.101/
Çıktı: Hello world

-->

<?php
	require_once 'F3/F3.php';

	F3::route('GET /','main');
		function main() {
			F3::set('name','world');
			F3::set('buddy',array('Tom','Dick','Harry'));
			F3::set('gender', 'M');
			F3::set('loggedin', 'true');
			F3::set('div',
				array(
					'coffee'=>array('arabica','barako','liberica','kopiluwak'),
					'tea'=>array('darjeeling','pekoe','samovar')
				)
			);
			F3::set('rows',array(1,2,3,4,5));


			echo F3::serve('5template.htm');
		}

	F3::run();
?>
