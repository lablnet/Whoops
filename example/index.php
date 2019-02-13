<?php 
	use Lablnet\Whoops;
	require '../vendor/autoload.php';
	$whoops = new Whoops();

	//append the editor and use that
	//$whoops->appendEditor("whateverName" , "whateverUri://open?url=file://::file&line=::line",)->setEditor('test');

	//use editor
	$whoops->setEditor('sublime');
	$a = 10;
	echo "The value of a is ".valueOfA();
	
	/*Rest of code*/
	echo "This is rest of code";
