<?php
header('Content-Type: application/xml; charset=utf-8');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">

<channel>
  <title>RSS output</title>
  <link>http://www.events.com</link>
  <description>Free Events for all</description>\n";
  
include("sindesi.php"); //sindesi me ti vasi
$cat=$_POST['cat'];
foreach ($cat as $v)
{



	$query="select * from events where category  like '%$v%' limit 0,10";
	$t=mysqli_query($cnt,$query);
		while ($r=mysqli_fetch_array($t))
		{
		echo "<item>
		<title>$r[onoma]</title>
		<start_time>$r[date_start]</start_time>
		<owner>$r[owner]</owner>
		<category>$r[category]</category>
		</item>\n";
		
		}

}
?> 
</channel></rss>
