<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("commentInsertFunction.php");
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
			<form action="commentInsert_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table style="width: 40vw"><tr>
					<th style="width: 20vw">評論者姓名:</th>
					<th><input placeholder="請輸入評論者姓名" name="insert_comment_att1" style = "width:150px;height:20px"></th></tr><tr>
					<th style="width: 20vw">評分:</th>
					<th><input placeholder="0.0 ~ 10.0" name="insert_comment_att2" style = "width:150px;height:20px"></th></tr><tr>
					<th style="width: 20vw">評論的電影:</th>
					<th><input placeholder="請輸入電影名稱" name="insert_comment_att3" style = "width:150px;height:20px"></th></tr><tr>
				</div>
				<th colspan=2><input type="submit" name="Search" value="新增電影評論"></th></tr>
				</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php 
				if(isset($_POST['Search'])){
					echo InsertCommentContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>