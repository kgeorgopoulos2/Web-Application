<?php
$a=1;
if (isset($_GET['pg_exit'])) //an kanei click sto eksodos
{
	include "$_GET[pg_exit]"; //emfanise th lista
	$a=0;
}

session_start(); // ksekinaei ena kainourgio session

include("sindesi.php"); //sindesi me ti vasi

 


if(!isset($_SESSION['login'])) //an o xrhsths den einai admin 
{

  $_SESSION['login']=0;  //den exoume syndethei
  
}



include("upper.php"); //panw meros tis selidas
include("menu.php"); //include me th seira


if (isset($_GET['pg_evid'])) //an kanei click sto na dei ena event
{
	include "$_GET[pg_evid]"; //enfanise to event
	$a=0;
}


if (isset($_GET['pg_rss'])) //an kanei click sto na dei ena event
{
	include "$_GET[pg_rss]"; //enfanise to event
	$a=0;
}



if (isset($_GET['pg_ekd'])) //an kanei click stis ekdhlwseis
{
	include "$_GET[pg_ekd]"; //emfanise th lista
	$a=0;
}

if (isset($_GET['pg_synd'])) //an kanei click stis ekdhlwseis
{
	include "$_GET[pg_synd]"; //emfanise th lista
	$a=0;
}

	
if (isset($_GET['pg_login'])) //an to pg_login oristei dhl an ginei click sto eisodos
{
	include "$_GET[pg_login]"; //emfanisei th login forma apto test_loginphp
	$a=0;
}
else {
	
if ($_SESSION['login']==1)
{
	if (isset($_GET['pg_us'])) //an kanei click stous xristes
	{

		include "$_GET[pg_us]"; //emfanise tous xristes
		$a=0;
		
	}

	else if (isset($_GET['pg_edit'])) //an to pg_edit oristei dhl an ginei click sto kataxwrisi 
	{
		include "$_GET[pg_edit]"; //emfanisei th forma apto edit
		$a=0;
	}

}

else {
if ($err==1) {
	echo "Λάθος στοιχεία";
}


	
}



}


if ($a==1) include("center.php");

include("bottom.php");


?>
