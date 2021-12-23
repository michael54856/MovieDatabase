<?php
	function OutputContent()
	{
		$host = 'localhost';
		$dbuser ='root';
		$dbpassword = '';
		$dbname = 'testDB';
		$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
		$sql = "SELECT * FROM table1 WHERE money >= 2000";

		$finalStr = "";

		if($link)
		{
			$result = mysqli_query($link,$sql) or die("Bad query : $sql");
			$finalStr .= "<table border='2'><thead><tr><th>id</th><th>name</th><th>money</th><th>money</th></tr></thead>";
			$finalStr .= "<tbody>";
			while($row = mysqli_fetch_array($result))
			{
				$finalStr .= "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['money']}</td><td>{$row['gender']}</td></tr>";
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>電影資料檢索系統</title>
  </head>
  <body>
	<h1 align="center">電影資料檢索系統</h1>

	<!-- 查詢-->
	
	<div align="center" id="searchTable">
		<select name="primaryInfo" onchange="choosePrimaryInfo(this.options[this.options.selectedIndex].value)">
		<option value="default" selected style="color:gray;">請選擇要查詢的資訊</option>
		<option value="movie">電影</option>
		<option value="actor">演員</option>
		<option value="director">導演</option>
		<option value="studio">工作室</option>
		<option value="comment">評論</option>
		</select>
		<br></br>
		<div class="display: inline;">
			電影名稱:
			<input placeholder="請輸入電影名稱" style = "width:150px;height:16px">
			時長:
			<input placeholder="無下限" style = "width:50px;height:16px">~<input placeholder="無上限" style = "width:50px;height:16px">
			類型:
			<select name="type">
			<option value="type_0" selected style="color:gray;">請選擇類型</option>
			<option value="type_1">動作</option>
			<option value="type_2">喜劇</option>
			<option value="type_3">恐怖</option>
			<option value="type_4">科幻</option>
			<option value="type_5">冒險</option>
			</select>
			評分:
			<input placeholder="0.0" style = "width:50px;height:16px">~<input placeholder="10.0" style = "width:50px;height:16px">
			導演:
			<input placeholder="請輸入導演名子" style = "width:150px;height:16px">
			國家:
			<input placeholder="請輸入發行國家" style = "width:150px;height:16px">
			工作室:
			<input placeholder="請輸入所屬工作室" style = "width:150px;height:16px">
		</div>
		<div align="center">
        	<button class="custom-btn btn-3" id="tableButton"><span>搜尋</span></button>
		</div>
		
	</div>

	<script>
	function choosePrimaryInfo(s)
	{
  		if(s == "default")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" selected style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\">電影</option>";
			htmlContent += "<option value=\"actor\">演員</option>";
			htmlContent += "<option value=\"director\">導演</option>";
			htmlContent += "<option value=\"studio\">工作室</option>";
			htmlContent += "<option value=\"comment\">評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;
		}
		else if(s == "movie")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\" selected>電影</option>";
			htmlContent += "<option value=\"actor\">演員</option>";
			htmlContent += "<option value=\"director\">導演</option>";
			htmlContent += "<option value=\"studio\">工作室</option>";
			htmlContent += "<option value=\"comment\">評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;

		}
		else if(s == "actor")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\">電影</option>";
			htmlContent += "<option value=\"actor\" selected>演員</option>";
			htmlContent += "<option value=\"director\">導演</option>";
			htmlContent += "<option value=\"studio\">工作室</option>";
			htmlContent += "<option value=\"comment\">評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;
		}
		else if(s == "director")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\">電影</option>";
			htmlContent += "<option value=\"actor\">演員</option>";
			htmlContent += "<option value=\"director\" selected>導演</option>";
			htmlContent += "<option value=\"studio\">工作室</option>";
			htmlContent += "<option value=\"comment\">評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;
		}
		else if(s == "studio")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\">電影</option>";
			htmlContent += "<option value=\"actor\">演員</option>";
			htmlContent += "<option value=\"director\">導演</option>";
			htmlContent += "<option value=\"studio\" selected>工作室</option>";
			htmlContent += "<option value=\"comment\">評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;
		}
		else if(s == "comment")
		{
			let mySearchOptions = document.getElementById("searchTable");
			let htmlContent = "";
			htmlContent += "<select name=\"primaryInfo\" onchange=\"choosePrimaryInfo(this.options[this.options.selectedIndex].value)\">";
			htmlContent += "<option value=\"default\" style=\"color:gray;\">請選擇要查詢的資訊</option>";
			htmlContent += "<option value=\"movie\">電影</option>";
			htmlContent += "<option value=\"actor\">演員</option>";
			htmlContent += "<option value=\"director\">導演</option>";
			htmlContent += "<option value=\"studio\">工作室</option>";
			htmlContent += "<option value=\"comment\" selected>評論</option>";
			htmlContent += "</select>";
			mySearchOptions.innerHTML = htmlContent;
		}
	}
	</script>
	<!-- 查詢-->

	<br></br>

	<!--結果表格-->
    <div align="center" id="myTable">

    </div>
	<!--結果表格-->

	
	<script>
		let myButton = document.getElementById("tableButton");
		myButton.addEventListener("click", function(){
			let tableContainer = document.getElementById("myTable");
			var myvar = decodeURIComponent("<?php echo OutputContent(); ?>");
			tableContainer.innerHTML = myvar;
		});
	</script>

  </body>
</html>