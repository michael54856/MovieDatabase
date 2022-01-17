<?php
	function InsertCastingContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_casting_att1"],$_POST["insert_casting_att1"],$_POST["insert_casting_att2"]);

		
		$sql = "";

		if($a[1] == "")
		{
			echo "請輸入演員名字";
			return "";
		}
		
		if($a[2] == "")
		{
			echo "請輸入電影名字";
			return "";
		}

		$finalStr = "";

		if($link)
		{
			$sql2 = "SELECT id from actors WHERE name = '{$a[1]}';";
			$result_2 = mysqli_query($link,$sql2) or die("Bad query : $sql2");
			if($row = mysqli_fetch_array($result_2))
			{
				$sql3 = "SELECT id from movies WHERE name = '{$a[2]}';";
				$result_3 = mysqli_query($link,$sql3) or die("Bad query : $sql3");
				if($row2 = mysqli_fetch_array($result_3))
				{
					$sql4 = "SELECT id from castings WHERE actor_id = {$row['id']} and movie_id = {$row2['id']};";
					$result_4 = mysqli_query($link,$sql4) or die("Bad query : $sql4");
					
					if($row3 = mysqli_fetch_array($result_4))
					{
						echo "該紀錄已存在!";
					}
					else
					{
						$sql = "INSERT INTO castings (movie_id,actor_id) VALUES ({$row2['id']},{$row['id']});";
						$result = mysqli_query($link,$sql) or die("Bad query : $sql");

						echo "新增成功!";
					}

					
				}
				else
				{
					echo "電影不存在!";
				}
			}
			else
			{
				echo "演員不存在!";
			}
			
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

		return $finalStr;
	}
?>