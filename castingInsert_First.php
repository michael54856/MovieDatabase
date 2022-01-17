<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("castingInsertFunction.php");
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
			<form action="castingInsert_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table style="width: 40vw"><tr>
					<th style="width: 20vw">演員姓名:</th>
					<th><input placeholder="請輸入演員姓名" name="insert_casting_att1" style = "width:150px;height:20px"></th></tr><tr>
					<th style="width: 20vw">參演的電影:</th>
					<th><input placeholder="請輸入電影名稱" name="insert_casting_att2" style = "width:150px;height:20px"></th></tr><tr>
				</div>
				<th colspan=2><input type="submit" name="Search" value="新增Casting資料"></th></tr>
				</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php 
				if(isset($_POST['Search'])){
					echo InsertCastingContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>