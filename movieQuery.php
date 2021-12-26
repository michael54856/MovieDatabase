<?php
	function OutputMovieContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["att1"],$_POST["att1"],$_POST["att2"],$_POST["att3"],$_POST["att4"],$_POST["att5"],$_POST["att6"],$_POST["att7"],$_POST["att8"],$_POST["att9"],$_POST["att10"],$_POST["att11"],$_POST["att12"],$_POST["att13"],$_POST["att14"],$_POST["att15"]);
		
		//$sql = "SELECT * FROM movies WHERE movies.name like '%{$_POST["att1"]}%'";
		//$sql = "SELECT A1.id as movie_id,A2.name as movie_name,A1.length as movie_length,A1.type as movie_type,A1.age_limit as movie_age,A2.director.name as director_name,A3.name as country_name,A2.studios.name as studio_name,A1.release_date as release_date  FROM (SELECT *  FROM movies	WHERE (movies.name like'%{$a[1]}%') AND (movies.length between {$a[2]}AND {$a[3]}) AND (movies.type like '%{$a[4]}%')AND (movies.age_limit <= {$a[7]}) AND (movies.budget between {$a[8]} AND {$a[9]})) AS A1, (SELECT *  FROM directors , studios  WHERE directors.studio_id=studios.id  AND directors.name like '%{$a[10]}%' AND studios.name like '%{$a[12]}%' ) AS A2,countries AS A3 WHERE A1.director_id=A2.directors.id AND A3.id=A1.country_id AND A3.name like '%{$a[11]}%'";
		//$sql = "select * from movies where name like '%{$a[1]}%' and length between {$a[2]} and {$a[3]}"; 
		//$sql = "select * 
		//from movies
		//where name like '%{$a[1]}%' and length between {$a[2]} and {$a[3]} and type like '%{$a[4]}%' and age_limit >= {$a[7]} and budget between {$a[8]} and {$a[9]};";
		//$sql = "SELECT  directors.name as name , directors.gender as gender  FROM directors , studios WHERE (directors.studio_id=studios.id) AND (directors.name like '%{$a[10]}%') AND (studios.name like '%{$a[12]}%')";
		$sql = "with
		t1 as (select * from movies where name like '%{$a[1]}%' and length between {$a[2]} and {$a[3]} and type like '%{$a[4]}%' and age_limit >= {$a[8]} and budget between {$a[9]} and {$a[10]} and release_date >= {$a[5]}),
		t2 as (SELECT directors.id as directorsID, directors.name as directorName FROM directors , studios WHERE (directors.studio_id=studios.id) AND (directors.name like '%{$a[11]}%') AND (studios.name like '%{$a[13]}%')),
		t3 as (SELECT id,name,type,directorName,country_id,age_limit,budget,release_date,length FROM t1,t2 WHERE t1.director_id = t2.directorsID),
		t4 as (SELECT t3.id as id,t3.name as name,type,directorName,countries.name as countryName,age_limit,budget,release_date,length from t3,countries where t3.country_id = countries.id and countries.name like '%{$a[12]}%')
		SELECT * from t4;";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>電影id</th><th>電影名稱</th><th>類型</th><th>導演</th><th>國家</th><th>觀看年齡</th><th>預算</th><th>發行年份</th><th>時長</th></tr></thead>";
			//$finalStr .= "<table><thead><tr><th>名稱</th><th>性別</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				//$finalStr .= "<tr><td>{$row['name']}</td><td>{$row['gender']}</td></tr>\n";
				//$finalStr .= "<tr><td>{$row['directors.name']}</td><td>{$row['directors.gender']}</td></tr>\n";
				//$finalStr .= "<tr><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['age_limit']}</td><td>{$row['length']}</td></tr>\n";
				$finalStr .= "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['directorName']}</td><td>{$row['countryName']}</td><td>{$row['age_limit']}</td><td>{$row['budget']}</td><td>{$row['release_date']}</td><td>{$row['length']}</td></tr>\n";
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