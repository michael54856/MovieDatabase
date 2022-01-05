<!DOCTYPE html>
<?php
	require_once ("actorInsertFunction.php");
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

	<div style="position:absolute; top:30vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="actorInsert_Second.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					演員名子:
					<input placeholder="請輸入演員名子" name="insert_actor_att1" style = "width:150px;height:20px">
					性別:
					<select name="insert_actor_att2">
						<option value="M" selected>male</option>
						<option value="F">female</option>
					</select>
					國籍:
					<input placeholder="請輸入國家名子" name="insert_actor_att3" style = "width:150px;height:20px">
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