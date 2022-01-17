<!DOCTYPE html>
<?php
	include_once("check.php");
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
			<form action="actorInsert_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table style="width: 40vw">
					<tr><th style="width: 20vw">演員姓名:</th>
					<th><input placeholder="請輸入演員姓名" name="insert_actor_att1" style = "width:150px;height:20px"></th></tr>
					<tr><th style="width: 20vw">性別:</th>
					<th><select name="insert_actor_att2">
						<option value="M" selected>male</option>
						<option value="F">female</option>
					</select></th></tr>
					<tr><th style="width: 20vw">國籍:</th>
					<th><input placeholder="請輸入國家名子" name="insert_actor_att3" style = "width:150px;height:20px"></th></tr>
						<tr><th colspan=2><input type="submit" name="Search" value="新增演員資料"></th></tr>
					</table>
				</div>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
		<?php 
				if(isset($_POST['Search'])){
					echo InsertActorContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>