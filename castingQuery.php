<?php
	function OutputCastingContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["casting_att1"],$_POST["casting_att1"],$_POST["casting_att2"]);
		
		$sql_movie = "SELECT id,name from movies WHERE name like '%{$_POST["casting_att2"]}%'"; //find movie
		
		$finalStr = "";

		if($link)
		{
			$result_movie = mysqli_query($link,$sql_movie) or die("Bad query : $sql_movie");

			$finalStr .= "<table><thead><tr style='background-color:#619af5;'><th style=\"width: 4vw\">刪除</th><th>演員</th><th>參演的電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result_movie))
			{
				//這裡只看一個movie id
				$sql_actor = "SELECT id,actor_id from castings WHERE movie_id = {$row['id']};"; //find actor act in movie
				$result_actor = mysqli_query($link,$sql_actor) or die("Bad query : $sql_actor");

				while($actor_row = mysqli_fetch_array($result_actor))
				{
					$sql_actor_name = "SELECT name from actors WHERE id = {$actor_row['actor_id']} and name like '%{$_POST["casting_att1"]}%'"; //find actor name
					$result_actor_name = mysqli_query($link,$sql_actor_name) or die("Bad query : $sql_actor_name");

					while($actor_row_name = mysqli_fetch_array($result_actor_name))
					{
						$finalStr .= "<tr><td><input style=\"width:40px; height:40px\" type=\"button\" name=\"{$actor_row['id']}\" value=\"刪除\" onclick=\"deleteRow(this)\"></td><td>{$actor_row_name['name']}</td><td>{$row['name']}</td></tr>\n";
					}
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