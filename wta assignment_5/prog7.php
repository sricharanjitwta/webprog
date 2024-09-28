<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {
color: white;
font-size: 50px;
position: absolute;
top: 40%;
left: 50%;
transform: translate(-50%, -50%);
}
body {
background-color: red;
}
</style>
<p> Server time is <?php echo date(" h:i:s A");?> <br>
Today is <?php echo date("Y/m/d");?> <br>
Today is <?php echo date("Y.m.d");?> <br>
Today is <?php echo date("Y-m-d");?> <br>
Today is <?php echo date("l");?>
</p>
</head>
</html>