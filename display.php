<?php
//Program for reading csv file and displaying it in a table form
echo "<html><body><table border=5>\n\n";
$f=fopen('upload/'.$_GET['filename'],"r");
while (($line = fgetcsv($f)) !== false) 
{
echo "<tr>";
foreach ($line as $cell) 
{
echo "<td>" . htmlspecialchars($cell) . "</td>";
}
echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
