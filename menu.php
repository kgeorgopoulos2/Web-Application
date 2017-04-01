

<?php
if ($_SESSION['login']==0) //an einai o guest
{
	echo "<div id=menu>
<ul>
<li><a href='index.php'>Αρχική</a></li>
<li><a href='index.php?pg_rss=rss.php'>RSS</a></li>
<li><a href='index.php?pg_login=test_login.php'>Είσοδος</a></li>
</ul>
</div> ";
}

if ($_SESSION['login']==1) //an einai o admin
{
	echo "<div id=menu>
<ul>
<li><a href='index.php'>Αρχική</a></li>
<li><a href='index.php?pg_us=users.php'>Χρήστες</a></li>
<li><a href='index.php?pg_ekd=ekd.php'>Ενημέρωση Εκδηλώσεις</a></li>
<li><a href='index.php?pg_synd=synd.php'>Συνδέσεις</a></li>
<li><a href='index.php?pg_edit=edit.php'>Προσθήκη Διαχειριστών</a></li>
<li><a href='index.php?pg_exit=logout.php'>Έξοδος</a></li>

</ul>
</div> ";
}


?>

