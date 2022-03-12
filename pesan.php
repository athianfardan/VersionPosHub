<?php
	/*---------------------------------
		Design				:	roedz
		Modify				:	roedz
		Last update		:	23 September 2003
		--------------------------------- */
	
	// menampilkan pesan 
	
	echo "<div align='center'><h1>$pesan</h1></div>";
	print ("<script language=JavaScript> alert ('$pesan');</script>");
	if ($act=="back"){
		print ("<script language=javascript>window.history.back();</script>");
	}elseif ($act=="Refresh"){
	 print ("<script language=javascript>window.history.Refresh();</script>");}
?>
