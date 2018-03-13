<?php 
	require_once("header.php");
	
	
	$result=queryMysql("SELECT * FROM messages");
	if ($result->num_rows) {
		$row=$result->fetch_array(MYSQLI_ASSOC);
		foreach ($result as $row) {
		echo "<div>
		<p>".$row['email']."</p>
		<p>".$row['message']."</p>
		<p>".$row['date']."</p>
		<p>".$row['name']."</p>
		<div id='reply' style='visibility:hidden;'>
		Test
		</div>
	</div>";}
			} 
		else {
	    echo "0 results";
	}
	require_once("footer.php");
?>