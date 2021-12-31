<?php
	function OutputStudioContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["studio_att1"],$_POST["studio_att1"],$_POST["studio_att2"],$_POST["studio_att3"]);

		
		$sql = "SELECT * from studios WHERE name LIKE '%{$a[1]}%'";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>工作室名稱</th><th>導演</th><th>發行的電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$sql_2 = "SELECT id,name FROM directors WHERE studio_id = {$row['id']}";
				$result_Director = mysqli_query($link,$sql_2) or die("Bad query : $sql_2");
				$firstDirector = true;
				$directorStr = "";
				$haveDirector = false;
				$firstMovie = true;
				$movieStr = "";
				$haveMovie = false;
				if($a[2] == "")
				{
					$haveMovie = true;
				}
				if($a[3] == "")
				{
					$haveDirector = true;
				}
				while($row_Director = mysqli_fetch_array($result_Director))
				{
					$sql_3 = "SELECT name FROM movies where director_id = {$row_Director['id']}";
					$result_Movie = mysqli_query($link,$sql_3) or die("Bad query : $sql_3");
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

					if($firstDirector == true)
					{
						$directorStr .= $row_Director['name'];
						$firstDirector = false;
					}
					else
					{
						$directorStr .= ",";
						$directorStr .= $row_Director['name'];
					}
					if(strpos($row_Director['name'], $a[3]) !== false)
					{
						$haveDirector = true;
					}
					
				}
				
				if($haveDirector == true && $haveMovie == true)
				{
					$finalStr .= "<tr><td>{$row['name']}</td><td>{$directorStr}</td><td>{$movieStr}</td></tr>\n";
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