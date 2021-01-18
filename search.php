<?php

$connect = mysqli_connect("localhost", "root", "","agri");

if(isset($_POST["query"])){
	$output = '';
	$query = "SELECT * FROM  crop_imports WHERE crop_name LIKE '%".$_POST["query"]."%'";

	$result= mysqli_query($connect, $query);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output=
			'<ul class="list-unstyled">
                   <li>'

                   .$row["crop_name"].

                   '</li>
              </ul>';
		}
	}
	else{
			$output=
			'<ul class="list-unstyled">
                   <li>country Not Found</li>
              </ul>';
	}
	
	echo $output;
}

?>