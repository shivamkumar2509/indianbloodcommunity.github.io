<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="donar1.css">
	<style>
		.succes{
			 border:3px solid #00ff00;
		}
		.error{
			border:2px solid red;
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
	<form action="backend" name="myform" id="font"><pre id="front">NAME:          <input type="text" id="name" name="name" placeholder="NAME">    AGE:  <input type="text" name="age" placeholder="AGE">

MOBILE NUMBER: <input type="text" name="mobilenumber" id="number" placeholder="NUMBER">   E-MAIL:<input type="text" name="email" id="email" placeholder="E-MAIL"> 

GENDER:        Male<input type="radio" name="gender"> Female <input type="radio" name="gender"> Other <input type="radio" name="gender"> DATE: <input type="date" name=" date">
		


<label for="state">STATE:</label>          <select name="mystate" id="state"> 
			<option value="select your state">---SELECT YOUR STATE---</option>
			
		</select> <label for="city">CITY:</label><select name="mycity" id="city"> 
			<option value="select your state">---SELECT YOUR CITY---</option>
						
		</select>




<label for="hospital">HOSPITAL:</label><select name="myhospital" id="hospital"> 
			<option value="select your state">---SELECT YOUR HOSPITAL---</option>
					 </select>    <label for="blood">BLOOD:</label><select name="myblood" id="blood"> 
			<option value="select your state">---SELECT YOUR BLOOD GROUP---</option>
			<option value="jharkhand">A+</option>
			<option value="jharkhand">B+</option>
			<option value="jharkhand">AB+</option>
			<option value="jharkhand">O+</option>
			<option value="jharkhand">A-</option>
			<option value="jharkhand">B-</option>
			<option value="jharkhand">AB-</option>
		    <option value="jharkhand">O-</option>
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
	<script type="text/javascript" src="jquery-3.7.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			function loadData(type, category_id){
				$.ajax({
					url:"load-cs.php",
					type:"POST",
					data:{type : type,id : category_id},
					success:function(data){
						if(type == "cityData"){
							$("#city").html(data);
						}
							else{
								$("#state").append(data);
							}
						
					}
				});
			}

			loadData();

			$("#state").on("change",function () {
				var state = $("#state").val();

				loadData("cityData",state);
			})
		})
	</script>
</body>
</html>