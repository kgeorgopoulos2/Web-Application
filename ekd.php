

<div id=main>
<h1>Ενημέρωση εκδηλώσεων</h1>


<?php



$query="select * from pages";
$t=mysqli_query($cnt,$query);
	while ($r=mysqli_fetch_array($t))
	{
	
	
		$s=@file_get_contents("https://graph.facebook.com/$r[id]/events?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
		$jsn1=json_decode($s);
		
		foreach ($jsn1->data as $ev)
		{
		$s=@file_get_contents("https://graph.facebook.com/".$ev->id."?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
		$jsn2=json_decode($s);
		
		$s=@file_get_contents("https://graph.facebook.com/".$ev->id."/photos?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
		$jsn3=json_decode($s);
		
		
		$s=@file_get_contents("https://graph.facebook.com/".$jsn2->owner->id."?access_token=1522348318012265|oYMb_mPk_8DcaoB-ibHtBmmSIjU");
		$jsn4=json_decode($s);
			
			
			$q="INSERT INTO events (id, onoma, perigrafi, x, y, id_page, image_file, date_start, category, owner, owner_descr) 
			VALUES ('".$ev->id."', '".@$jsn2->name."', '".@$jsn2->description."', '".@$jsn4->location->latitude."',  '".@$jsn4->location->longitude."',
			'$r[id]', '".@$jsn3->data[0]->picture."', '".@$jsn2->start_time."', '".@$jsn2->owner->category."', '".@$jsn4->name."', '".@$jsn4->description."')";
			if (!mysqli_query($cnt,$q))
			{
			mysqli_query($cnt,"delete from events where id='".$ev->id."'");
			mysqli_query($cnt,$q);
			
			}
			
		
		}
	
	}

?>
Ολα τα events Ενημερώθηκαν

</div>