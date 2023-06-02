<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="donar1.css">
	<style>
		.succes {
			border: 3px solid #00ff00;
		}

		.error {
			border: 2px solid red;
		}
	</style>

</head>

<body>
	<img src="360_F_67704008_fxdmJ8wDOqDYts9P3tzdbxqZf8NfWT21.jpg" id="background">
	<div class="center">
		<img src="logo-removebg-preview.png" id="logo">
		<h1>INDIAN BLOOD COMMUNITY</h1>
		<p>I.B.C.</p>
		<fieldset>
			<legend>BLOOD DONOR</legend>
			<form action="backend.php" name="myform" id="font" method="post">
				<pre id="front">NAME:          <input type="text" id="name" name="sname" placeholder="NAME">    AGE:  <input type="text" name="age" placeholder="AGE">


MOBILE NUMBER: <input type="text" name="mobilenumber" id="number" placeholder="NUMBER">   E-MAIL:<input type="text" name="email" id="email" placeholder="E-MAIL"> 


GENDER:        Male<input type="radio" name="gender" value="Male"> Female <input type="radio" name="gender" value="Female"> Other <input type="radio" name="gender" value="Other"> DATE: <input type="date" name="sdate">
		


 <label for="state">STATE:</label>      <select name="mystate" id="state">  
			<option value="">---SELECT YOUR STATE---</option>
			<?php
			$conn= mysqli_connect("localhost","root","","india") or die("connection failed");
			$sql= "select * from state";
			$result= mysqli_query($conn,$sql) or die("query unsuccessful.");
			while($row = mysqli_fetch_assoc($result)){

			?>
			<option value="<?php echo $row['mystate']?>"><?php echo $row['mystate']?></option>
			<?php }?>
			
		</select>   <label for="city">CITY:</label><select name="mycity" id="city"> 
			<option >---SELECT YOUR CITY---</option>
			<?php
			$conn= mysqli_connect("localhost","root","","india") or die("connection failed");
			$sql1= "select * from city";
			$result1= mysqli_query($conn,$sql1) or die("query unsuccessful.");
			while($row1 = mysqli_fetch_assoc($result1)){

			?>
			<option value="<?php echo $row1['city_name']?>"><?php echo $row1['city_name']?></option>
			<?php }?>
						
		</select>




<label for="hospital">HOSPITAL:</label><select name="myhospital" id="hospital"> 
			<option >---SELECT YOUR HOSPITAL---</option>
			<option value="rims" >RIMS</option>
					 </select>    <label for="blood">BLOOD:</label><select name="myblood" id="blood"> 
			<option value="select your state">---SELECT YOUR BLOOD GROUP---</option>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="AB+">AB+</option>
			<option value="O+">O+</option>
			<option value="A-">A-</option>
			<option value="B-">B-</option>
			<option value="AB-">AB-</option>
		    <option value="O-">O-</option>
		</select> 

		


<input type="submit" name="submit"><input type="reset" name="reset">
</pre>
				<div id="photo"><img src="thin-line-black-camera-logo-like-upload-your-photo-thin-line-black-camera-logo-like-upload-your-photo-graphic-art-design-element-106033006.jpg" class="upload" id = "pic">
			<div class="file-input">
  <input type="file" id="file" class="file" onchange="loadFile(event)">
  <label for="file">
<img src="upload-button-2468752-removebg-preview.png" class="upload" id="up_btn"> 
				</label>
	</div>

	</div>
	</form>
	</fieldset>
	</div>
	<script src="page3.js"></script>
</body>

</html>