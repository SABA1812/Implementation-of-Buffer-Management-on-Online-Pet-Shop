<?php
$myfile = fopen("data.txt", "r") or die("Unable to open file!");

echo "<table>";
while(!feof($myfile)) {
  echo "<tr><td width='600' bgcolor='white'>";
  echo fgets($myfile) . "<br>";
  
  echo "</td></tr>";
}
echo "</table>";
fclose($myfile);
?>