<br><br>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<div id=main>
<?php
$query="select * from events where id='$_GET[id]'";
$t=mysqli_query($cnt,$query);
	while ($r=mysqli_fetch_array($t))
	{
	echo "<center> <h1>$r[onoma]</h1><br>$r[date_start]<br><br>$r[owner]<br><br>$r[category]<br>
	<br>$r[perigrafi]<br>
	<br>$r[owner_descr]<br><center>";
	if ($r['image_file']!=""){
		echo "<br><img src='$r[image_file]' width=20%><br><br></center>";
	}
	if($r['x']!=0)
	{
	echo "
	
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng($r[x],$r[y]);
  var mapOptions = {
    zoom: 14,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: '$r[onoma]'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
  <br><br><center>
    <div id='map-canvas' style='width:80%; height:300px;'></div></center>
	";
	
	}
	}

?> 

</div>
