<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("movieQuery.php");
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

	<div style="position:absolute; top:26vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="movieFind_First.php" method="post" id="movieTableButton">
				<div class="display: inline;">
					<table>
					<input type="hidden" name="att4">
					<input type="hidden" name="att8">
					<tr>
						<th>
							電影名稱:<br>
							<input placeholder="請輸入電影名稱" name="att1" style = "width:150px;height:20px" value="<?php if(isset($_POST['att1'])) echo $_POST["att1"];?>">
						</th>
						<th>
							時長:<br>
							<input placeholder="0" name="att2" style = "width:60px;height:20px"  value="<?php if(isset($_POST['att2'])) echo $_POST["att2"];?>">~<input name="att3" placeholder="無上限" style = "width:60px;height:20px"  value="<?php if(isset($_POST['att3'])) echo $_POST["att3"];?>" >
						</th>
						<th>
							類型:<br>
							<select name="att4">
								<option selected disabled>請選擇類型</option>
								<option>Action</option>
								<option>Adventure</option>
								<option>Biography</option>
								<option>Comedy</option>
								<option>Crime</option>
								<option>Drama</option>
								<option>Fantasy</option>
								<option>Horror</option>
								<option>Sci-Fi</option>
								<option>War</option>
							</select>
						</th>
					
					<!--<input placeholder="請輸入類型" name="att4" style = "width:100px;height:20px">-->
						<th>
							上映時間:<br>
							<input placeholder="請輸入上映年份" name="att5" style = "width:100px;height:20px"  value="<?php if(isset($_POST['att5'])) echo $_POST["att5"];?>">
						</th>
						<th>
							評分:<br>
							<input placeholder="0.0" name="att6" style = "width:60px;height:20px" value="<?php if(isset($_POST['att6'])) echo $_POST["att6"];?>">~<input placeholder="10.0" name="att7" value="<?php if(isset($_POST['att7'])) echo $_POST["att7"];?>" style = "width:60px;height:20px">
						</th>
						<th>
							年齡限制:<br>
							<select name="att8">
								<option selected disabled>請選擇最低年齡</option>
								<option>0</option>
								<option>6</option>
								<option>13</option>
								<option>17</option>
							</select>
						</th>
						<th>
							預算:<br>
							<input placeholder="0" name="att9"  value="<?php if(isset($_POST['att9'])) echo $_POST["att9"];?>" style = "width:60px;height:20px">~<input placeholder="無上限" name="att10" style = "width:60px;height:20px"  value="<?php if(isset($_POST['att10'])) echo $_POST["att10"];?>">
						</th>
					</tr>
					<tr style="background-color: #cfe0f7;">
						<th>
							導演:<br>
							<input placeholder="請輸入導演姓名" name="att11" style = "width:150px;height:20px"  value="<?php if(isset($_POST['att11'])) echo $_POST["att11"];?>">
						</th>
						<th>
							國家:<br>
							<input placeholder="請輸入發行國家" name="att12" style = "width:150px;height:20px"  value="<?php if(isset($_POST['att12'])) echo $_POST["att12"];?>">
						</th>
						<th>
							工作室:<br>
							<input placeholder="請輸入製作工作室" name="att13" style = "width:150px;height:20px"  value="<?php if(isset($_POST['att13'])) echo $_POST["att13"];?>">
						</th>
						<th>
							演員:<br>
							<input placeholder="請輸入演員姓名" name="att14" style = "width:150px;height:20px"  value="<?php if(isset($_POST['att14'])) echo $_POST["att14"];?>">
						</th>
						<th>
							獎項:<br>
							<input placeholder="請輸入獎項名稱" name="att15" style = "width:150px;height:20px"  value="<?php if(isset($_POST['att15'])) echo $_POST["att15"];?>">
						</th>
						<th colspan="2" align="center" style="padding: 3px;"><input type="submit" name="Search" value="搜尋"></th>
					</tr>
					<!--<input placeholder="請輸入年齡" name="att8" style = "width:100px;height:20px">-->
					</table>
				</div>
			</form>
		</div>
		<br><br>
		<!--結果表格-->
		<div align="center" id="myTable">
			<?php 
				if(isset($_POST['Search'])){
					echo OutputMovieContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>