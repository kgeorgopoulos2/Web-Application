<?php 
 $err=0;

if ($cnt = mysqli_connect('localhost', 'root', '', 'db_events')) {
	mysqli_query($cnt,"set names 'utf8'");
} //syndeoume th bash me to kwdika 
else {
	echo "Connection error";
	
}




if (isset($_POST['submit_login']))
{
	
	$q="select * from administrators where username='$_POST[username]' and password='$_POST[password]'";
	$t=mysqli_query($cnt,$q);
	if (mysqli_num_rows($t)==1)
	{
	
		$_SESSION['login']=1;

		
	}
	else {
	$err=1;	
	}
	
}
if (isset($_POST['apostoli']))
{
	
	$s="insert into administrators (username,password) values ('$_POST[onoma]','$_POST[kodikos]')";
	mysqli_query($cnt,$s);
}


if (isset($_POST['vurl']))
{
	$m=explode("/",$_POST['vurl']);
	$l=$m[count($m)-1];
	
	$s=@file_get_contents("https://graph.facebook.com/$l?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
	$jsn=json_decode($s);
	
	$x="INSERT INTO pages (id, url, onoma) VALUES ('".@$jsn->id."', '$_POST[vurl]', '".@$jsn->name."');";
	mysqli_query($cnt,$x);
}




?>