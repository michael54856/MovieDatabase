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

 		 <script>
			function deleteRow(o) 
			{
				
				var myVar = o.name;
				$.ajax({
					url: "movieDelete.php",
					type: "POST",
					data:{"deleteID":myVar}
					}).done(function(data) {

				});
				
				var p=o.parentNode.parentNode;
				p.parentNode.removeChild(p);
				
			}
		</script>

	<div style="position:absolute; top:26vh;" class = "flex">
		<!-- 查詢-->
		
		<div align="center" id="searchTable" >
			<form action="movieFind_First.php" method="post" id="movieTableButton">
				<div class="display: inline;">
					<table>
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
							<select name="att4" style = "width:150px;height:20px">
								<option value = "" selected>不限</option>
								<option value="Action">Action</option>
								<option value="Drama">Drama</option>
								<option value="Crime">Crime</option>
								<option value="Fantasy">Fantasy</option>
								<option value="Adventure">Adventure</option>
								<option value="Sci-Fi">Sci-Fi</option>
								<option value="Biography">Biography</option>
								<option value="Comedy">Comedy</option>
								<option value="War">War</option>
								<option value="Horror">Horror</option>
								<option value="Mystery">Mystery</option>
								<option value="Romance">Romance</option>
								<option value="Thriller">Thriller</option>
								<option value="Western">Western</option>
								<option value="Disaster">Disaster</option>
								<option value="Psychological">Psychological</option>
								<option value="Detective">Detective</option>
								<option value="Documentary">Documentary</option>
								<option value="Martial">Martial</option>
								<option value="Musicals">Musicals</option>
								<option value="Gangster">Gangster</option>
								<option value="Epics">Epics</option>
								<option value="Historical">Historical</option>
								<option value="Sports">Sports</option>
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
								<option value="0" selected>0</option>
								<option value="6">6</option>
								<option value="13">13</option>
								<option value="17">17</option>
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
							<select name="att12" style = "width:150px;height:20px">
								<option value="" selected>不限</option>
								<option value="USA">USA</option>
								<option value="UK">UK</option>
								<option value="Japan">Japan</option>
								<option value="South Korea">South Korea</option>
								<option value="Australia">Australia</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Cabo Verde">Cabo Verde</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Cameroon">Cameroon</option>
								<option value="China">China</option>
								<option value="Chad">Chad</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Dominica">Dominica</option>
								<option value="Comoros">Comoros</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Egypt">Egypt</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Denmark">Denmark</option>
								<option value="Eritrea">Eritrea</option>
								<option value="France">France</option>
								<option value="Estonia">Estonia</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Ghana">Ghana</option>
								<option value="Germany">Germany</option>
								<option value="Greece">Greece</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Haiti">Haiti</option>
								<option value="Honduras">Honduras</option>
								<option value="Holy See">Holy See</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Ireland">Ireland</option>
								<option value="Iraq">Iraq</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Kenya">Kenya</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Liberia">Liberia</option>
								<option value="Malawi">Malawi</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Maldives">Maldives</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia">Micronesia</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Monaco">Monaco</option>
								<option value="Namibia">Namibia</option>
								<option value="Nepal">Nepal</option>
								<option value="New Zealand">New Zealand</option>
								<option value="North Korea">North Korea</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Norway">Norway</option>
								<option value="North Macedonia">North Macedonia</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Panama">Panama</option>
								<option value="Palestine State">Palestine State</option>
								<option value="Poland">Poland</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Romania">Romania</option>
								<option value="Qatar">Qatar</option>
								<option value="Portugal">Portugal</option>
								<option value="Russia">Russia</option>
								<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Samoa">Samoa</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Thailand">Thailand</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Zimbabwe">Zimbabwe</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
							</select>
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