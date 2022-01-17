<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("castingQuery.php");
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
				url: "castingDelete.php",
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
			<form action="castingFind_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table>
						<tr>
					<th>
					演員姓名:
					<input placeholder="請輸入演員姓名" name="casting_att1" style = "width:150px;height:20px" value="<?php if(isset($_POST['casting_att1'])) echo $_POST["casting_att1"];?>">
						</th><th>
					參演的電影:
					<input placeholder="請輸入參演的電影" name="casting_att2" style = "width:150px;height:20px" value="<?php if(isset($_POST['casting_att2'])) echo $_POST["casting_att2"];?>">
					</th>
					<th style="padding: 3px;">
				</div>
				<input type="submit" name="Search" value="搜尋"></th></tr>
				</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			
		</div>
		<!--結果表格-->
		<?php 
				if(isset($_POST['Search'])){
					echo OutputCastingContent();
				}
				
		?>
		<br></br>



	</div>
	
  </body>
</html>