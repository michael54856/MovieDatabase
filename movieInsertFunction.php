<?php
	function InsertMovieContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'moviedatabase';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$a=array($_POST["insert_movie_att1"],$_POST["insert_movie_att1"],$_POST["insert_movie_att2"],$_POST["insert_movie_att3"],$_POST["insert_movie_att4"],$_POST["insert_movie_att5"],$_POST["insert_movie_att6"],$_POST["insert_movie_att7"],$_POST["insert_movie_att8"]);

		
		$sql = "";

		if($a[1] == "")
		{
			echo "請輸入電影名字";
			return "";
		}

		if($a[2] == "")
		{
			echo "請輸入導演名字";
			return "";
		}

		if($a[6] == "")
		{
			echo "請輸入預算";
			return "";
		}

		if($a[7] == "")
		{
			echo "請輸入上映年份";
			return "";
		}

		if($a[8] == "")
		{
			echo "請輸入時長";
			return "";
		}

		if(ctype_digit($a[6])== false)
		{
			echo "預算請輸入正整數";
			return "";
		}
		if(ctype_digit($a[7])== false)
		{
			echo "上映年份請輸入正整數";
			return "";
		}
		if(ctype_digit($a[8])== false)
		{
			echo "時長請輸入正整數";
			return "";
		}


		if($link)
		{
			$sql_checkMovie = "SELECT * from movies WHERE name = '{$a[1]}';";
			$result_checkMovie = mysqli_query($link,$sql_checkMovie) or die("Bad query : $sql_checkMovie");

			if($row = mysqli_fetch_array($result_checkMovie))
			{
				echo "電影已存在!";
			}
			else
			{
				$sql_checkDirector = "SELECT * from directors WHERE name = '{$a[3]}';";
				$result_checkDirector = mysqli_query($link,$sql_checkDirector) or die("Bad query : $sql_checkDirector");
				if($row2 = mysqli_fetch_array($result_checkDirector))
				{
					$sql_country = "SELECT * from countries WHERE name = '{$a[4]}';";
					$result_country = mysqli_query($link,$sql_country) or die("Bad query : $sql_country");
					if($row3 = mysqli_fetch_array($result_country))
					{
						$sql = "INSERT INTO movies (name,type,director_id,country_id,age_limit,budget,release_date,length) VALUES ('{$a[1]}','{$a[2]}',{$row2['id']},{$row3['id']},{$a[5]},{$a[6]},{$a[7]},{$a[8]});";
						$result = mysqli_query($link,$sql) or die("Bad query : $sql");
						echo "新增成功!";
					}
					
				}
				else
				{
					echo "導演不存在!";
				}
			}
			

			
		}
		else 
		{
			echo "不正確連接資料庫</br>" . mysqli_connect_error();
		}

	}
?>