<?php
	function InsertAwardContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_award_att1"],$_POST["insert_award_att1"],$_POST["insert_award_att2"]);
		
		$sql = "";

		if($a[1] == "")
		{
			echo "請輸入獎項名稱";
			return "";
		}

		if($a[2] == "")
		{
			echo "請輸入獲獎電影";
			return "";
		}

		$finalStr = "";

		

		if($link)
		{
			$sql2 = "SELECT * from movies WHERE name = '{$a[2]}';";
			$result_2 = mysqli_query($link,$sql2) or die("Bad query : $sql2");

			if($row = mysqli_fetch_array($result_2))
			{
				$sql3 = "SELECT * from awards WHERE movie_id = {$row['id']} and awardName = '{$a[1]}';";
				$result_3 = mysqli_query($link,$sql3) or die("Bad query : $sql3");
				if($row3 = mysqli_fetch_array($result_3))
				{
					echo "該筆資料已存在!";
				}
				else
				{
					$sql = "INSERT INTO awards (movie_id,awardName) VALUES ({$row['id']},'{$a[1]}');";
					$result = mysqli_query($link,$sql) or die("Bad query : $sql");
					echo "新增成功!";
					$haveStudio = true;
				}
				
			}
			else
			{
				echo "電影不存在!";
			}
			
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

		return $finalStr;
	}
?>