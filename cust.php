<!DOCTYPE html>
<html>
<body>
<center>
<h1>CUSTOMER_INFO</h1>
<?php echo "<html><body><center><table>\n\n";
$file=fopen("customer_info.csv","r");
while(($data=fgetcsv($file))!==false)
{
echo" <tr>";
foreach($data as $i)
{
echo "<td>".htmlspecialchars($i)."</td>";
}
echo"</tr>\n";
}
fclose($file);
echo"\n<table></center></body></html>";
?>
</center>
</body>
</html>
