<?php
for($i=0; $i<3; $i++)
{
	for($j=0; $j<=$i; $j++)
	{
		echo "* ";
	}
	echo "<br/>";
}
for($i=3; $i>=0; $i++)
{
	for($j=0; $j<=$i; $j++)
	{
		echo $j . " ";
	}
	echo "<br/>";
}
?>