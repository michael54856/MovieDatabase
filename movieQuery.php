<?php
	function OutputMovieContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["att1"],$_POST["att1"],$_POST["att2"],$_POST["att3"],$_POST["att4"],$_POST["att5"],$_POST["att6"],$_POST["att7"],$_POST["att8"],$_POST["att9"],$_POST["att10"],$_POST["att11"],$_POST["att12"],$_POST["att13"],$_POST["att14"],$_POST["att15"]);

		if($a[2] == "")
		{
			$a[2] = "0";
		}
		if($a[3] == "")
		{
			$a[3] = "2147483647";
		}
		if($a[5] == "")
		{
			$a[5] = "0";
		}
		if($a[6] == "")
		{
			$a[6] = "0";
		}
		if($a[7] == "")
		{
			$a[7] = "10";
		}
		if($a[8] == "")
		{
			$a[8] = "0";
		}
		if($a[9] == "")
		{
			$a[9] = "0";
		}
		if($a[10] == "")
		{
			$a[10] = "2147483647";
		}

		
		$sql = "with
		t1 as (select * from movies where name like '%{$a[1]}%' and length between {$a[2]} and {$a[3]} and type like '%{$a[4]}%' and age_limit >= {$a[8]} and budget between {$a[9]} and {$a[10]} and release_date >= {$a[5]}),
		t2 as (SELECT directors.id as directorsID, directors.name as directorName FROM directors , studios WHERE (directors.studio_id=studios.id) AND (directors.name like '%{$a[11]}%') AND (studios.name like '%{$a[13]}%')),
		t3 as (SELECT id,name,type,directorName,country_id,age_limit,budget,release_date,length FROM t1,t2 WHERE t1.director_id = t2.directorsID),
		t4 as (SELECT t3.id as id,t3.name as name,type,directorName,countries.name as countryName,age_limit,budget,release_date,length from t3,countries where t3.country_id = countries.id and countries.name like '%{$a[12]}%')
		SELECT * from t4 ORDER BY release_date;";


		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>電影名稱</th><th>類型</th><th>導演</th><th>發行國家</th><th>觀看年齡</th><th>預算</th><th>上映年份</th><th>時長</th><th>評分</th><th>獎項</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$sql_2 = "SELECT actors.name as name FROM actors,castings WHERE castings.movie_id = {$row['id']} and castings.actor_id = actors.id;";
				$result_Actor = mysqli_query($link,$sql_2) or die("Bad query : $sql_2");
				$haveActor = false;
				while($row_Actor = mysqli_fetch_array($result_Actor))
				{
					if(strpos($row_Actor['name'], $a[14]) !== false)
					{
						$haveActor = true;
						break;
					}
				}
				if($haveActor == true)
				{
					$awardStr = "";
					$firstAward = true;
					$haveAward = false;
					$sql_3 = "SELECT awardName FROM awards WHERE movie_id = {$row['id']}";
					$result_Award = mysqli_query($link,$sql_3) or die("Bad query : $sql_3");
					while($row_Award = mysqli_fetch_array($result_Award))
					{
						if($firstAward == true)
						{
							$awardStr .= $row_Award['awardName'];
							$firstAward = false;
						}
						else
						{
							$awardStr .= ",";
							$awardStr .= $row_Award['awardName'];

						}
						if(strpos($row_Award['awardName'], $a[15]) !== false)
						{
							$haveAward = true;
						}
					}
					if($haveAward == true)
					{
						$sql_4 = "select avg(reviews.rate) as rate from reviews where reviews.movie_id={$row['id']}";
						$result_Rate = mysqli_query($link,$sql_4) or die("Bad query : $sql_4");
						$row_Rate = mysqli_fetch_array($result_Rate);
						$Rate = (float)$row_Rate['rate'];
						$Rate = round($Rate, 2);
						if($Rate >= $a[6] && $Rate <= $a[7])
						{
							$finalStr .= "<tr><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['directorName']}</td><td>{$row['countryName']}</td><td>{$row['age_limit']}</td><td>{$row['budget']}</td><td>{$row['release_date']}</td><td>{$row['length']}</td><td>{$Rate}</td><td>{$awardStr}</td></tr>\n";
						}
						
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