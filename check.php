<?php
$url=$_GET['url'];

$f=strpos($url,"//www.facebook.com/");
if ($f==false)
{
	echo "NO";

}
else
{

	$m=explode("/",$url);
	$l=$m[count($m)-1];
	
	$s=@file_get_contents("https://graph.facebook.com/$l?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
	
	if ($s=="")
	{
		echo "NO";
	
	}
	else
	{
	echo "YES";
	
	}
	



}




?>