<html>
<head>
<title>e-Εκδήλωση</title>
</head>
<link rel="stylesheet" type="text/css" href="theme.css">
<meta charset='utf-8'>
<body>
<div id=banner>
<img src=banner.png id=b1>
</div>


<div id=Kappa>
<ul>
<li><form action="action_page.php" >
<input type="text" value="Όνομα,Ημερομηνία......" 
onfocus="if (this.value == 'Όνομα,Ημερομηνία......') {this.value = '';}"
onblur="if (this.value == '') {this.value = 'Όνομα,Ημερομηνία......';}"
>
</form></li>
<li><a>Αναζήτηση:</a></li>
</ul>
</div>





<div id=menu>
<ul>
<li><a href='index.php'>Αρχική</a></li>
<li><a href='http://www.google.com'>Χρήστες</a></li>
<li><a href='ekd.php'>Εκδηλώσεις</a></li>
<li><a href='login.php'>Είσοδος</a></li>
<li><a href='http://www.google.com'>Έξοδος</a></li>
</ul>
</div> 





<br><br>

<div id=main>

<br><br><br>

<div id=login_section>
<?php 
$mysqli = new mysqli('localhost', 'root', '', 'db_events');


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

if (isset($_POST['submit']))
{
	
	$q="select * from administrators where username='$_POST[username]' and password='$_POST[password]'";
	$t=mysql_num_rows($q);
	if (mysql_num_rows($t)==1)
	{
		
		$rec=mysql_fetch_array($t);
		
	}
}
?>


<form action='index.php method=post accept-charset='UTF-8'>
<legend><b>Σύνδεση</b></legend>
<br>

<tr>
<label for='username' >Όνομα*&nbsp&nbsp&nbsp&nbsp:</label>
<td><input type='text'  required name=username /></td>
<br><br>
<label for='password' >Κωδικός*&nbsp:</label>
<td><input type='password' required name=password /></td>
<br><br><br>
<input type='submit' name=submit value='Είσοδος' /> 
</tr>
</form>
</div>

</div>


<br><br>


<div id=footer>

Copyright &copy; From our Team


<a href='http://www.facebook.com'><img src="new1.png" alt="The official Facebook icon">
<a href='http://www.rss.com'><img src="new2.png" alt="The official RSS icon">
<a href='http://www.instagram.com'><img src="new3.png" alt="The official Instagram icon">
<a href='http://www.twitter.com'><img src="new4.png" alt="The official Twitter icon">
<a href='http://www.plus.google.com'><img src="new5.png" alt="The official Google+ icon">



</div>





</body>
</html>