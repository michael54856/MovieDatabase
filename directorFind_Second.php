<!DOCTYPE html>
<?php
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

	<div style="position:absolute; top:30vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="directorFind_Second.php" method="post" id="actorTableButton">
				<div class="display: inline;">
					導演名子:
					<input placeholder="請輸入導演名子" name="director_att1" style = "width:150px;height:20px" value = '<?php echo $_POST["director_att1"] ?>'>
					執導的電影:
					<input placeholder="請輸入執導過的電影" name="director_att2" style = "width:150px;height:20px" value = '<?php echo $_POST["director_att2"] ?>'>
					性別:
					<select name="director_att3">
						<option value="" selected>不限</option>
						<option value="M">male</option>
						<option value="F">female</option>
					</select>
					所屬工作室:
					<input placeholder="請輸入所屬工作室" name="director_att4" style = "width:150px;height:20px" value = '<?php echo $_POST["director_att4"] ?>'>
				</div>
				<br></br>
				<input type="submit">
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php echo OutputDirectorContent(); ?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>