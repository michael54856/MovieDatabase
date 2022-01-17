<?php
	function OutputAwardContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["award_att1"],$_POST["award_att1"],$_POST["award_att2"]);

		
		$sql = "select awards.id as ID,awardName,movies.name as movieName
		from awards,movies 
		where awardName like '%{$a[2]}%' and movies.id = awards.movie_id and movies.name like '%{$a[1]}%'";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table><thead><tr style='background-color:#619af5;'><th style=\"width: 4vw\">刪除</th><th>獎項</th><th>獲獎電影</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$finalStr .= "<tr><td><input style=\"width:40px; height:40px\" type=\"button\" name=\"{$row['ID']}\" value=\"刪除\" onclick=\"deleteRow(this)\"></td><td>{$row['awardName']}</td><td>{$row['movieName']}</td></tr>\n";
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