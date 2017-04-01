<script>
// kodikas ajax
function validation()
{	
	var f=false;
	var xmlhttp;
	var url=document.getElementById('vurl').value;

	  xmlhttp=new XMLHttpRequest();
	
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		if (xmlhttp.responseText=="YES") {f=true;}
		else {alert ("No Facebook URL"); }
		}
		
	  }
	xmlhttp.open("GET","check.php?url="+url,false);
	xmlhttp.send();
	return f;
}



</script>


<div id=main>
<h1>Συνδέσεις</h1>
<form action='' method=post onsubmit='return validation();'>
<b>URL</b><br>
<input type=url id=vurl name=vurl><br>
<input type=submit value='Προσθήκη'>
</form>

<?php
if (isset($_GET['del']))
{
$query="delete from pages where id='$_GET[del]'";
$t=mysqli_query($cnt,$query);
}


$query="select * from pages";
$t=mysqli_query($cnt,$query);
	while ($r=mysqli_fetch_array($t))
	{
		echo "<center> <b>$r[onoma] <a href='index.php?pg_synd=synd.php&del=$r[id]'>[x]</a></b><br>$r[url]<br><br></center>";
	
	}

?>


</div>