<?php
$user = "Sricharan (1jt18is055)";
?>
“<style>
<?php include "main.css";?> //external ‘main.css’ file used for styling
</style>”
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<h2> <?php echo $user; ?>, Welcome to Sample PHP Script </h2>
<h3>This program displays the number of page visits</h3>
<?php
print "<h3 style=color:white> REFRESH PAGE</h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "<h3 style=color:white>Total number of views: $hits[0]</h3>";
?>
</body>
</html>