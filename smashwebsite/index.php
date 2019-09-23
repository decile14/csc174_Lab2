<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Assignment 02: Smash Website</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<style>
.mySlides {display:none;}
</style>

	<body class="container">
		<div class="header">
		<div class="container1">
		<header>
			<a href="index.php">


				<h2 class="w3-center">Pics of Havana</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/havana.jpg" style="width:100%">
  <img class="mySlides" src="images/Hvna.jpg" style="width:100%">
  <img class="mySlides" src="images/HCuba.jpg" style="width:100%">
  <img class="mySlides" src="images/Hcity.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


				<h1 class="teamtitle">Team Havana</h1>
			</a>
			<p>This is a website created by Team Havana (aka Dominique, Michael, and Vanessa). We created this website for the second assignment in CSC 174 called Smash Website. We used the webpages of Ana Sofía Acuña, Jialin Huome, and Alyssa L Nelson to create this website.</p>
		</header>
		
		</div><!--.container1-->

		</div><!--.header-->

		<main class="area">
			<div class="aacuna">
				<a href="aacuna-main.php">
				<img src="images/me.jpg" alt="Aacuna" style="width: 95%">
				</a>
				<p>Aacuna</p>
			</div>
			
			<div class="jhuo3">
				<a href="jhuo3-main.php">
				<img src="images/me2.jpg" alt="Jhou" style="width: 95%">
				</a>
				<p>Jhuo</p>
			</div>

			<div class="anels">
				<a href="anels28-main.php">
				<img src="images/moi.jpg" alt="Moi " style="width: 95%">
				</a>
				<p>Anels</p>
			</div>

			<div>
				<?php include "inc/main-nav.inc"; ?>
			</div>
		</main>

	<?php include "inc/footer.inc"; ?>