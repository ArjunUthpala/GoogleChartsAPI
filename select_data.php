<?php

require("connection.php");
$query = "SELECT * from election";

			 $exec = mysqli_query($conn,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['Fname']."',".$row['Votes']."],";
			 }
?>