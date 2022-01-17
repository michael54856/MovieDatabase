<?php
	function InsertDirectorContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_direcotr_att1"],$_POST["insert_direcotr_att1"],$_POST["insert_direcotr_att2"],$_POST["insert_direcotr_att3"]);
		
		$sql = "";

		if($a[1] == "")
		{
			echo "請輸入導演名字";
			return "";
		}

		if($a[3] == "")
		{
			echo "請輸入工作室名字";
			return "";
		}

		$finalStr = "";

		

		if($link)
		{
			$sql2 = "SELECT * from studios WHERE name = '{$a[3]}';";
			$result_2 = mysqli_query($link,$sql2) or die("Bad query : $sql2");

			if($row = mysqli_fetch_array($result_2))
			{
				$sql3 = "SELECT * from directors WHERE name = '{$a[1]}'";
				$result_3 = mysqli_query($link,$sql3) or die("Bad query : $sql3");
				if($row3 = mysqli_fetch_array($result_3))
				{
					echo "導演已存在!";
				}
				else
				{
					$sql = "INSERT INTO directors (name,gender,studio_id) VALUES ('{$a[1]}','{$a[2]}',{$row['id']});";
					$result = mysqli_query($link,$sql) or die("Bad query : $sql");
					echo "新增成功!";
					$haveStudio = true;
				}



				
			}
			else
			{
				echo "工作室不存在!";
			}
			
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

		return $finalStr;
	}
?>