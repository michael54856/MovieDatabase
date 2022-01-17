<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("directorQuery.php");
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
					url: "directorDelete.php",
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
			<form action="directorFind_First.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					<table><tr><th>
					導演名子:
					<input placeholder="請輸入導演名子" name="director_att1" style = "width:150px;height:20px" value="<?php if(isset($_POST['director_att1'])) echo $_POST["director_att1"]; ?>">
</th><th>
					執導的電影:
					<input placeholder="請輸入執導過的電影" name="director_att2" style = "width:150px;height:20px" value="<?php if(isset($_POST['director_att2'])) echo $_POST["director_att2"]; ?>">
					</th><th>
					性別:
					<select name="director_att3">
						<option value="" selected>不限</option>
						<option value="M">male</option>
						<option value="F">female</option>
					</select>
					</th><th>
					所屬工作室:
					<input placeholder="請輸入所屬工作室" name="director_att4" style = "width:150px;height:20px;" value="<?php if(isset($_POST['director_att4'])) echo $_POST["director_att4"]; ?>">
				</th><th style="padding: 3px;"><input type="submit" name="Search" value="搜尋"></th></tr>
				</div>
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
					echo OutputDirectorContent();
				}
				
			?>
		<br></br>

	</div>
	
  </body>
</html>