<?php
	function OutputActorContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["actor_att1"],$_POST["actor_att1"],$_POST["actor_att2"],$_POST["actor_att3"],$_POST["actor_att4"]);

		
		$sql = "WITH
		t1 as (SELECT id as countryID, name as countryName from countries WHERE name like '%$a[4]%'),
		t2 as (SELECT id,name,gender,countryName FROM actors,t1 WHERE name LIKE '%$a[1]%' and gender like '%$a[3]%' and nationality_id = t1.countryID)
		SELECT * FROM t2 ORDER BY countryName;";
	
		

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>演員名稱</th><th>性別</th><th>國籍</th><th>演過的電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$sql_2 = "WITH t1 as (SELECT movie_id FROM castings WHERE actor_id = {$row['id']}) SELECT name FROM movies,t1 WHERE id=movie_id;";
				$result_Movie = mysqli_query($link,$sql_2) or die("Bad query : $sql_2");
				$firstMovie = true;
				$haveMovie = false;
				if($a[2] == "")
				{
					$haveMovie = true;
				}
				$movieStr = "";
				while($row_Movie = mysqli_fetch_array($result_Movie))
				{
					if($firstMovie == true)
					{
						$movieStr .= $row_Movie['name'];
						$firstMovie = false;
					}
					else
					{
						$movieStr .= ",";
						$movieStr .= $row_Movie['name'];

					}
					if(strpos($row_Movie['name'], $a[2]) !== false)
					{
						$haveMovie = true;
					}
				}
				if($haveMovie == true)
				{
					$finalStr .= "<tr><td>{$row['name']}</td><td>{$row['gender']}</td><td>{$row['countryName']}</td><td>{$movieStr}</td></tr>\n";
				}
				
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