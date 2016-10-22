<?php
	
	$fname = 'deadLan.txt' ;
	
	$fileToRead = file_get_contents($fname);
	$preeditCount = preg_match_all("/wh*/", $fileToRead);
	$replace = preg_replace("/\(.*\)/", "(*wh*)" , $fileToRead , -1, $posteditCount);
	$fileToWrite = fopen($fname, 'r+') or die("Can not open the $fname");
	fseek($fileToWrite ,782);
	$replace = preg_replace("/wha/", "which", $replace , -1, $selectionCount);
	echo $replace;
	$newfile = fopen ("newfile.txt" , "w") or die ("Can not open the $newfile") ;
	fwrite($newfile, $fileToRead);
	fclose ($newfile) ;
	fclose ($fileToWrite) ;
	
	// Connect to my Sql 
	
	$lines = file('/home/int322_161a31/secret/topsecret');
	$server = trim($lines[0]) ;
	$uid = trim($lines[1]) ;
	$pass = trim($lines[2]) ;
	$dbname = trim($lines[3]) ;
		
	$link = mysqli_connect($server, $uid, $pass, $dbname)
         			or die('Could not connect: ' . mysqli_error($link));
		
	$sql_query = 'INSERT INTO editing set preedit="' . $preeditCount . '" , 
										  postedit= "' . $posteditCount . '" ,
										  selection ="' . $selectionCount .'" ';
		
	$result = mysqli_query($link, $sql_query) or die('query failed'. mysqli_error($link));
	
		
?>

