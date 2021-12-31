<?php
	function OutputDirectorContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["director_att1"],$_POST["director_att1"],$_POST["director_att2"],$_POST["director_att3"],$_POST["director_att4"]);

		
		$sql = "WITH
		t1 as (SELECT * from directors WHERE name like '%{$a[1]}%' and gender like '%{$a[3]}%'),
		t2 as (SELECT t1.id as id,t1.name as directorName, gender, studios.name as studioName from t1,studios WHERE studios.id = studio_id and studios.name like '%{$a[4]}%')
		SELECT * from t2 ORDER BY studioName";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>導演名稱</th><th>性別</th><th>工作室</th><th>執導的電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			
			
			while($row = mysqli_fetch_array($result))
			{
				$sql_2 = "SELECT name FROM movies WHERE director_id={$row['id']} and name like '%{$a[2]}%'";
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
					$haveMovie = true;
				}
				if($haveMovie == true)
				{
					$finalStr .= "<tr><td>{$row['directorName']}</td><td>{$row['gender']}</td><td>{$row['studioName']}</td><td>{$movieStr}</td></tr>\n";
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