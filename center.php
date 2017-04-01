<br><br>
<div id=main>

<script>
function check1()
{
var d2=document.getElementById('d2');
d2.setAttribute("min",document.getElementById('d1').value);
}

function check2()
{
var d1=document.getElementById('d1');
d1.setAttribute("max",document.getElementById('d2').value);
}

</script>
<form action='' method=post>
<b>Search Tool</b><br>
Λέξη Κλειδί: <input type=text name=key1><br>
Κατηγορία: <select name=cat><option value=''>Όλες</option>
<?php
$query="select distinct category from events ";
$t=mysqli_query($cnt,$query);
	while ($r=mysqli_fetch_array($t))
	{
	 echo "<option>$r[category]</option>";
	}

?>
</select><br>
Από:  <input type=date name=d1 id=d1  onchange='check1()' > - Μέχρι: <input type=date name=d2 id=d2  onchange='check2()' > <br>
<input type=submit value='Search'>


</form>
<hr>

<?php
$key1=@$_POST['key1'];
$cat=@$_POST['cat'];
$d1=@$_POST['d1'];
$d2=@$_POST['d2'];

$d="";
if ($d1!="" and $d2=="") $d="and date_start >= '$d1' ";
if ($d1!="" and $d2!="") $d="and date_start between '$d1' and '$d2' ";
if ($d1=="" and $d2!="") $d="and date_start <= '$d2' ";



$query="select * from events where 
(onoma like '%$key1%' or perigrafi like '%$key1%')
and category  like '%$cat%'
$d
order by date_start desc ";
$t=mysqli_query($cnt,$query);
	while ($r=mysqli_fetch_array($t))
	{
	echo "<center> <b><a href='index.php?pg_evid=show.php&id=$r[id]'>$r[onoma]</a></b><br>$r[date_start]<br><br>$r[owner]<br><br>$r[category]<br><br><img src='$r[image_file]' width=80px;><br><br></center>";
	
	}

?> 

</div>
