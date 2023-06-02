<!DOCTYPE html>
<html>
<head>
	<title>help</title>
	<link rel="stylesheet" type="text/css" href="help.css">
</head>
<body>

	<div class="section">
		<div class="hero">
			<article>
				<h1>HELP</h1>
				<!-- <img src="hand-giving-red-heart-help-blood-donation-hospital-healthcare-concept-139341090.jpg">
				<content>
					Each day, thousands of people-people just like you - provide companssionate care to those in need. Our network of generous donors,volunteers and employees share a mission of preventing and relieving    suffering, here at home and around the world.We roll  up oursleeves and donate time, money and blood.We learn or teach life-saving skills so our communities can be better prepared when the need arises. We do this everyday because the Red Cross is need the need arises. We do this everyday because the red cross is needed everyday.
				</content>
				<h5>I.B.C</h5>
				<p>Indian blood community</p> -->
			</article>
		</div>
	
    <P id="tt2">Hi, how can we help you ?</P>
	<div class="search">
		<div class="icon"></div>
		<div class="input">
			<input type="text" placeholder="search" id="mysearch">
		</div>
		<span class="clear" onclick="document.getElementByID('mysearch').value =' '"></span>
	</div>
	<div class="tt3">What’s New
        <div id="tt4">1.Which of the following blood group is considered a universal donor?</div>
        <div id="ans1">Ans. Blood group O is considered as universal donor. The Rh –ve blood
        is given to the Rh –ve patients and Rh +ve blood are  given  to the 
        Rh +ve patients.</div>
        <div id="tt5">2.Which of the following blood group is referred as a universal recipient?</div>
        <div id="ans2">Ans. Blood group AB is referres as auniversal receipient.They can receive 
         donated blood of any ABO blood groups.</div>
         <pre id="t1">TOGETHER TO CARE
 FOR HUMANITY
</pre>
<!-- <pre id="t2">BLOOD DONATION IS A <br>        FORM OF OUR<br> CONCERN FOR OTHERS
</pre>
<p id="rod"></p>
<pre id="t3">HELP THE NEEDY <br>PEOPLE
</pre>
 --><!-- <img src="istockphoto-174921599-170667a.jpg" id="last"> -->
	</div>

	</section>
</div>
	<script>
		const icon = document.querySelector('.icon');
		const search = document.querySelector('.search');
		icon.onclick = function(){
			search.classList.toggle('active')
		}
	</script>
</body>
</html>