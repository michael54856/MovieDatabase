<!DOCTYPE html>
<?php
	require_once ("studioQuery.php");
	include_once("others/header.html");
	include_once("others/menuOperations.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>電影資料檢索系統</title>
	<link type="text/css" href="css/style.css?v=<?time()?>" rel="stylesheet">
  </head>
  <body>

	<div style="position:absolute; top:25vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="studioFind_Second.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					工作室名子:
					<input placeholder="請輸入工作室名子" name="studio_att1" style = "width:150px;height:20px">
					發表的電影:
					<input placeholder="請輸入發表的電影" name="studio_att2" style = "width:150px;height:20px">
					導演:
					<input placeholder="請輸入導演名子" name="studio_att3" style = "width:150px;height:20px">
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
		
		<br></br>

	</div>
	
  </body>
</html>