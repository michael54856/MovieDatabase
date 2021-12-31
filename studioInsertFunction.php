<?php
	function InsertStudioContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_studio_att1"]);

		
		$sql = "INSERT INTO studios (name) VALUES ('{$a[0]}');";

		if($a[0] == "")
		{
			echo "請輸入名字";
			return "";
		}

		$finalStr = "";

		if($link)
		{
			$sql2 = "SELECT * from studios WHERE name = '{$a[0]}';";
			$result_2 = mysqli_query($link,$sql2) or die("Bad query : $sql2");
			$haveSame = false;
			if($row = mysqli_fetch_array($result_2))
			{
				$haveSame = true;
			}
			if($haveSame == true)
			{
				echo "該工作室已存在!";
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