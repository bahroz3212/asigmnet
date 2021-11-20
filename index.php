


<table style="margin: auto;" >
<?php
$array = array("a","b","c","d","e","f","g","h");
for($x=1;$x<=8;$x++)
{
	echo "<tr>";
	for($y=1;$y<=8;$y++)
	{
		$z=$x+$y;
		if($z%2==1)
		{
			echo "<td height=45px width=40px bgcolor=#008000  color=white>".$y .' '.$array[$x-1]."</td>";
		}
		else
		{
			echo "<td height=45px width=40px bgcolor=#878787 color=white>".$y.' '.$array[$x-1]."</td>";
		}
	}
	echo "</tr>";
}
?>
</table>