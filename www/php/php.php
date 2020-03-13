<?php
	//meta
	$keywords=0;
	$description=0;
	$title=0;
	//catalog_dveri
	function returnresult($result_set,$x)
	{
		while(($row=$result_set->fetch_assoc())!=false)
		{
			return($row["".$x.""]);
		}
	}
	//dveri
	function catalog_show_index_dveri()
	{
		$mysqli = mysqli_connect("localhost","id11327929_localhost","localhost","id11327929_catalog");
		if(!$mysqli)
		    echo'нет соединения с базой данных';
		$mysqli->query("SET NAMES 'utf8'");
		$counter=$mysqli->query("SELECT * FROM `prods`");
		for($i=1;$i<=$counter->num_rows;$i++)
		{
			$result_set_0=$mysqli->query("SELECT * FROM `prods` WHERE `id` = ".$i."");
			$result_set_1=$mysqli->query("SELECT * FROM `prods` WHERE `id` = ".$i."");
			echo '<div class="section-_0-div_0"><img src="'.returnresult($result_set_1,pics).'" alt=""><h3>'.returnresult($result_set_0,name).'</h3></div>';
		}
		$mysqli->close();
	}
?>
