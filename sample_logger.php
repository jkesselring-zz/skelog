<?php

	require_once "class.Log.php";
	require_once "class.Lorem.php";
	$lorem = new Lorem();
	
	$log = new Logger($lorem->getType());
	$records = rand(1, 10);
	
	$log->author("JKesselring");
	for ($i=0; $i < $records; ++$i) { 
		$log->setLogContent($lorem->getLorem(rand(1, 4)), $lorem->getLorem(rand(1, 5)), $lorem->getLorem(rand(5, 15)), $lorem->getName() . $lorem->getExt(), rand(0, 255));
	}

	try {
		throw new Exception("Error Processing Request", 1);
	} catch (Exception $e) {
		$log->author("JSmith");
		$log->setLogContent("Exception", "Exception Found", $e->getMessage(), $_SERVER['PHP_SELF'], 18, "");
	}


?>