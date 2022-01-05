<!DOCTYPE html>
<?php
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
			<form action="commentInsert_Second.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					評論者名子:
					<input placeholder="請輸入評論者名子" name="insert_comment_att1" style = "width:150px;height:20px">
					評分:
					<input placeholder="0.0 ~ 10.0" name="insert_comment_att2" style = "width:150px;height:20px">
					評論的電影:
					<input placeholder="請輸入電影名稱" name="insert_comment_att3" style = "width:150px;height:20px">
				</div>
				<br></br>
				<input type="submit">
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php echo InsertCommentContent();?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>