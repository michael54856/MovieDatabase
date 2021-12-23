<?php
	function OutputMovieContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'testDB';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array(1000,2000,3000);
		$sql = "SELECT * FROM table1 WHERE money >= {$a[1]}";

		for ( $i=1 ; $i<=12 ; $i++ ) 
		{
			$tt = "att".$i;
			echo $_POST[$tt];
		}



		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table border='2'><thead><tr><th>id</th><th>name</th><th>money</th><th>money</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$finalStr .= "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['money']}</td><td>{$row['gender']}</td></tr>";
			}
			$finalStr .= "</tbody>";
       		$finalStr .= "</table>";
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

		return $finalStr;
	}
?>