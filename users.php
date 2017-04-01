<div id=xristes>
<?php

if (isset($_POST['delusr']))
{
$query="delete from administrators where username='$_POST[delusr]'";
$r=mysqli_query($cnt,$query);

}

$query ="select username from administrators";
$r=mysqli_query($cnt,$query);




echo "

<table border='1'>
<tr>
<th>Χρήστες</th>
</tr>";


while($row =mysqli_fetch_array($r))
{

echo "<form action='' method=post>

<tr>";


echo "<td><input type=submit value='Διαγραφή' name=diagrafh><input type=hidden value='$row[username]' name=delusr> ".$row['username'] . "</td>";

echo "</tr>
</form>";
}



echo "</table>";

?>



</div>