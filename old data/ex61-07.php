<?php
$myfile = fopen("webdictionary.txt", "r") 
          or die("Unable to open file!");
// Output one line until end-of-file
$i =1;
while(!feof($myfile)) {
  //echo "$i: " ;
  echo fgetc($myfile) ;
  //echo "<br>";
  $i++;
}
fclose($myfile);
?>

