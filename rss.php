<br><br>
<div id=main>


<form action='rss2.php' method=post>
<b>Search Tool</b><br>
Κατηγορία: <select multiple name='cat[]'>
<?php
$query="select distinct category from events ";
$t=mysqli_query($cnt,$query);
$i=1;
	while ($r=mysqli_fetch_array($t))
	{
	 echo "<option>$r[category]</option>";
	 $i++;
	}
	

?>
</select><br>
<input type=submit value='GET RSS'>

</form>

