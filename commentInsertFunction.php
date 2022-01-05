<?php
	function InsertCommentContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_comment_att1"],$_POST["insert_comment_att1"],$_POST["insert_comment_att2"],$_POST["insert_comment_att3"]);

		
		$sql = "";

		if($a[1] == "")
		{
			echo "請輸入評論者名字";
			return "";
		}
		if($a[2] == "")
		{
			echo "請輸入評分";
			return "";
		}
		if($a[2] > 10 || $a[2] < 0)
		{
			echo "請輸入正確評分";
			return "";
		}
		if($a[3] == "")
		{
			echo "請輸入電影名字";
			return "";
		}

		$finalStr = "";

		if($link)
		{
			$sql2 = "SELECT * from movies WHERE name = '{$a[3]}';";
			$result_2 = mysqli_query($link,$sql2) or die("Bad query : $sql2");
			$haveMovie = false;
			if($row = mysqli_fetch_array($result_2))
			{
				$sql = "INSERT INTO reviews (movie_id,rate,reviewerName) VALUES ({$row['id']},{$a[2]},'{$a[1]}');";
				$haveMovie = true;
			}
			
			if($haveMovie == false)
			{
				echo "電影不存在!";
			}
			else
			{
				$result = mysqli_query($link,$sql) or die("Bad query : $sql");
				echo "新增成功!";
			}
			
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

		return $finalStr;
	}
?>