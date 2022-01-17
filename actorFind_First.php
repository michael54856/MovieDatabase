<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("actorQuery.php");
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
					url: "actorDelete.php",
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
			<form action="actorFind_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table>
						<tr>
					<th>
					演員名子:
					<input placeholder="請輸入演員名子" name="actor_att1" style = "width:150px;height:20px" value="<?php if(isset($_POST['actor_att1'])) echo $_POST["actor_att1"]; ?>"></th><th>
					演過的電影:
					<input placeholder="請輸入演過的電影" name="actor_att2" style = "width:150px;height:20px" value="<?php if(isset($_POST['actor_att2'])) echo $_POST["actor_att2"]; ?>" ></th><th>
					性別:
					<select name="actor_att3">
						<option value="" selected>不限</option>
						<option value="M">male</option>
						<option value="F">female</option>
					</select></th><th>
					國籍:
					<input placeholder="請輸入演員國籍" name="actor_att4" style = "width:150px;height:20px" value="<?php if(isset($_POST['actor_att4'])) echo $_POST["actor_att4"]; ?>"></th>
				</div>
				<th style="padding: 3px;">
				<input type="submit" name="Search" value="搜尋" ></th>
				</tr>
				</table>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php 
				if(isset($_POST['Search'])){
					echo OutputActorContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>