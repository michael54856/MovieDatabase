<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("directorInsertFunction.php");
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
			<form action="directorInsert_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table  style="width: 40vw"><tr>
					<th style="width: 20vw">導演姓名:</th>
					<th><input placeholder="請輸入導演姓名" name="insert_direcotr_att1" style = "width:150px;height:20px"></th></tr><tr>
					<th style="width: 20vw">性別:</th>
					<th><select name="insert_direcotr_att2">
						<option value="M" selected>male</option>
						<option value="F">female</option>
					</select></th></tr><tr>
					<th style="width: 20vw">所屬工作室:</th>
					<th><input placeholder="請輸入所屬工作室" name="insert_direcotr_att3" style = "width:150px;height:20px"></th></tr><tr>
				</div>
				<th colspan=2><input type="submit" name="Search" value="新增導演資料"></th></tr>
				</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
		<?php 
				if(isset($_POST['Search'])){
					echo InsertDirectorContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>