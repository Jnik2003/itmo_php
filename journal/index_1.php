<?php 
$mysqli = mysqli_connect("db", "root", "mypassword", "POSTS"); 

if ($mysqli === false) { 
die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
	$res = $mysqli->query("SELECT * FROM last_news"); 
	echo "<table>"; 
	echo "<tr><th>ID</th><th>Title</th><th>Content</th><th>Postcard</th></tr>";

	for ($row_no = 0; $row_no <= $res->num_rows - 1; $row_no++) {
	 $res->data_seek($row_no); 
	 $row = $res->fetch_assoc(); 
	 echo "<tr><td>".$row['ID_news']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>"; 
	}
	echo "</table>"; mysqli_close($mysqli); 
}
?>
