<!DOCTYPE html>
<?php
	include_once("check.php");
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
	<script>
			function deleteRow(o) 
			{
				
				var myVar = o.name;
				$.ajax({
					url: "studioDelete.php",
					type: "POST",
					data:{"deleteID":myVar}
					}).done(function(data) {

				});
				
				var p=o.parentNode.parentNode;
				p.parentNode.removeChild(p);
				
			}
		</script>

	<div style="position:absolute; top:30vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="studioFind_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table><tr><th>
					工作室名子:
					<input placeholder="請輸入工作室名子" name="studio_att1" style = "width:150px;height:20px" value="<?php if(isset($_POST['studio_att1'])) echo $_POST["studio_att1"];?>">
					</th><th>
					發表的電影:
					<input placeholder="請輸入發表的電影" name="studio_att2" style = "width:150px;height:20px" value="<?php if(isset($_POST['studio_att2'])) echo $_POST["studio_att2"];?>">
					</th><th>
					導演:
					<input placeholder="請輸入導演名子" name="studio_att3" style = "width:150px;height:20px" value="<?php if(isset($_POST['studio_att3'])) echo $_POST["studio_att3"];?>">
				</div>
				<th style="padding: 3px;">
				<input type="submit" name="Search" value="搜尋"></th>
</th></tr>
			</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
		<?php 
				if(isset($_POST['Search'])){
					echo OutputStudioContent(); 
				}
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>