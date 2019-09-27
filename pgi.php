<?php
	if(isset($_POST['click']))
		include"connect.php";
		echo"<br>";
		$n=$_POST['d2'];
		$a=$_POST['d3'];
		$ms=$_POST['d4'];
		$na=$_POST['d5'];
		$de=$_POST['d1'];
		$an=$_POST['d6'];
		$query="insert into PGI values('$n','$a','$na','$de','$ms','$an')";
		$data=mysqli_query($con,$query);
		if(isset($data))
	{
		echo"<br>";
		echo"Data Inserted";
	}
	else
	{
		echo"<br>";
		echo"Data not inserted";
	}
?>