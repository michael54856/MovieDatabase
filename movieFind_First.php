<?php
	require_once ("movieQuery.php");
	include_once("others/header.html");
	include_once("others/menuOperations.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>電影資料檢索系統</title>
	<link type="text/css" href="css/style.css?v=<?time()?>" rel="stylesheet">
  </head>
  <body>

	<div  style="position:absolute; top:25vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="movieFind_Second.php" method="post" id="movieTableButton">
				<div class="display: inline;">
					電影名稱:
					<input placeholder="請輸入電影名稱" name="att1" style = "width:150px;height:20px">
					時長:
					<input placeholder="無下限" name="att2" style = "width:60px;height:20px">~<input placeholder="無上限" name="att3" style = "width:60px;height:20px">
					類型:
					<input placeholder="請輸入類型" name="att4" style = "width:100px;height:20px">
					評分:
					<input placeholder="0.0" name="att5" style = "width:60px;height:20px">~<input placeholder="10.0" name="att6" style = "width:60px;height:20px">
					年齡限制:
					<input placeholder="請輸入年齡" name="att7" style = "width:100px;height:20px">
					<br></br>
					預算:
					<input placeholder="無下限" name="att8" style = "width:60px;height:20px">~<input placeholder="無上限" name="att9" style = "width:60px;height:20px">
					導演:
					<input placeholder="請輸入導演名子" name="att10" style = "width:150px;height:20px">
					國家:
					<input placeholder="請輸入發行國家" name="att11" style = "width:150px;height:20px">
					工作室:
					<input placeholder="請輸入製作工作室" name="att12" style = "width:150px;height:20px">
				</div>
				<br></br>
				<input type="submit">
			</form>
		</div>
		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			
		</div>
<!--結果表格-->
	
	<script>
		let myButton = document.getElementById("movieTableButton");
		myButton.addEventListener("click", function(){
			let tableContainer = document.getElementById("myTable");
			var myvar = decodeURIComponent("<?php echo OutputMovieContent(); ?>");
			tableContainer.innerHTML = myvar;
		});
	</script>

  </body>
</html>