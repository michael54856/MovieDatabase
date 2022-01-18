<!DOCTYPE html>
<?php
	include_once("check.php");
	require_once ("movieInsertFunction.php");
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
			<form action="movieInsert_First.php" method="post" id="movieTableButton">
				<div class="display: inline;">
					<table style="width: 40vw">
					<tr><th style="width: 20vw">電影名稱:</th>
					<th><input placeholder="請輸入電影名稱" name="insert_movie_att1" style = "width:150px;height:20px"></th></tr>
					<tr><th style="width: 20vw">類型:</th>
					<th>
					<select name="insert_movie_att2">
						<option value="Action" selected>Action</option>
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
					</th></tr>
					<tr><th style="width: 20vw">導演名字:</th>
					<th><input placeholder="請輸入導演名字" name="insert_movie_att3" style = "width:150px;height:20px"></th></tr>

					<tr><th style="width: 20vw">發行國家:</th>
					<th>
					<select name="insert_movie_att4"  style = "width:150px;height:20px">
						<option value="USA" selected>USA</option>
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
					</th></tr>

					<tr><th style="width: 20vw">年齡限制:</th>
					<th>
					<select name="insert_movie_att5">
						<option value="0" selected>0</option>
						<option value="6">6</option>
						<option value="13">13</option>
						<option value="17">17</option>
					</select>
					</th></tr>

					<tr><th style="width: 20vw">預算:</th>
					<th><input placeholder="請輸入預算" name="insert_movie_att6" style = "width:150px;height:20px"></th></tr>

					<tr><th style="width: 20vw">上映年份:</th>
					<th><input placeholder="請輸入上映年份" name="insert_movie_att7" style = "width:150px;height:20px"></th></tr>

					<tr><th style="width: 20vw">電影時長:</th>
					<th><input placeholder="請輸入電影時長(分鐘)" name="insert_movie_att8" style = "width:150px;height:20px"></th></tr>

					<tr><th colspan=2><input type="submit" name="Search" value="新增電影資料"></th></tr>
					</table>
				</div>
			</form>
		</div>

		<br></br>
		<!--結果表格-->
		<div align="center" id="myTable">
		<?php 
				if(isset($_POST['Search'])){
					echo InsertMovieContent(); 
				}
				
			?>
		</div>
		<!--結果表格-->
		
		<br></br>

	</div>
	
  </body>
</html>