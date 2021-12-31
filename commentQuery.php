<?php
	function OutputCommentContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["comment_att1"],$_POST["comment_att1"],$_POST["comment_att2"],$_POST["comment_att3"],$_POST["comment_att4"]);

		if($a[3] == "")
		{
			$a[3] = "0";
		}
		if($a[4] == "")
		{
			$a[4] = "10";
		}
		
		$sql = "SELECT reviewerName,rate,movies.name as movieName
		from reviews,movies
		WHERE reviews.movie_id = movies.id and reviews.rate BETWEEN {$a[3]} and {$a[4]} and reviews.reviewerName LIKE '%{$a[1]}%' and movies.name LIKE '%{$a[2]}%'";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr><th>評論者</th><th>評分</th><th>評論的電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$finalStr .= "<tr><td>{$row['reviewerName']}</td><td>{$row['rate']}</td><td>{$row['movieName']}</td></tr>\n";
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