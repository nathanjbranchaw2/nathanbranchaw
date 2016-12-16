<!-- This file will show all data from the Traditional_Stats table and display it as a table.--!>
<html>
<head>
</head>
<body>
<?php
$con = mysql_connect("localhost","branchaw","211018556");
mysql_select_db("basketball");
$result = mysql_query("SELECT * FROM Traditional_Stats");

$fields_num=mysql_num_fields($result);

echo"<h1> Lewis University Basketball Traditional Stats</h1>";
echo "<a href='TitlePage.html'>Home</a>";
echo"<br>";
echo"<table border='1'><tr>";

for($i=0; $i<$fields_num; $i++){
	$field=mysql_fetch_field($result);
	echo"<td>{$field->name}</td>";
}
echo"</tr>\n";

while($row=mysql_fetch_row($result))
{
	echo"<tr>";
	foreach($row as $cell)
		echo"<td>$cell</td>";
		
	echo"</tr>\n";
}
mysql_free_result($result);
?>

</body>
</html>
