<?php

$filename = "Dead Langauges";
file_exists($filename) or die ("The file $filename does not exist on server :( <br>Please double check for file presence.");
$data = file_get_contents($filename);
$string = "/wh*/";
preg_match_all($string, $data, $preedit);
$preedit = count($preedit[0]);
$data = preg_replace("/\(.*\)/", "(*wh*)" , $data , -1, $postedit);
$writefile  = fopen($filename, 'r+' ) or die ("File can't be open for some reason but it does exists on server. May be you don't have permissions or u dont have authority to access that file.");
fseek($writefile ,782);
$sub = fread($writefile, filesize($filename));
$return = preg_replace("/wha/", "which", $sub , -1, $selection);
$fnew = fopen ("newfile.txt" , "w") or die ("Can not open the $fnew") ;
fwrite($fnew, $return);
fclose ($fnew) ;
fclose ($writefile) ;
//SQL Queries Below this point.
$lines = file('/home/int322_161a31/secret/topsecret');
$dbserver = trim($lines[0]);
$uid = trim($lines[1]);
$pw = trim($lines[2]);
$dbname = trim($lines[3]);
$link = mysqli_connect($dbserver, $uid, $pw, $dbname) or die('Could not connect: ' . mysqli_error($link));
$sql_query = 'insert into editing (preedit,postedit,selection) values('.$preedit.','.$postedit.','.$selection.')';
$result = mysqli_query($link, $sql_query) or die('query failed'. mysqli_error($link));
$sql_query = "SELECT * from editing";
$result = mysqli_query($link, $sql_query) or die('query failed'. mysqli_error($link));
echo "Below are the Database retrieved values. <br><br><table border='1'><tr><td>preedit</td><td>postedit</td><td>Selection</td></tr>";
while($row = mysqli_fetch_assoc($result))
{
?>
	<tr>
	<td><?php print $row['preedit']; ?></td>
	<td><?php print $row['postedit']; ?></td>
	<td><?php print $row['selection']; ?></td>
	</tr>
<?php
}
echo "</table>";
echo "<br>Below is the text from newfile.txt<br><br>";
echo $return;
?>
