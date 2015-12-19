<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$nm=$_GET["ans"];
mysql_connect("localhost","root","");
mysql_select_db("sum");
mysql_query("insert into res values('$nm')");

?>
</body>
</html>
