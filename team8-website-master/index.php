<!-- homepage that introduces the	website's	topic	and	introduces	three	sub-topics-->

<!doctype html>
<?php $thisPage="home"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Team 8 Website</title>

	<?php include("inc/top.inc");?>

    <header>
	<h1><a href="index.php">New York Rangers</a></h1> 
    </header>

	<!--Probably use a php include for the hero/header-->

	<?php include("inc/nav.inc");?>

	<div class="slideshow-container">
	<div class="slideshow">
	<div class ="mySlides fade">
		<figure>
			<img src="images/WelcometoNYR.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/NYRlogo.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/NewYorkRangersTeamPic.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/RangersSkyline.jpg" width="100%" />
		</figure>
	</div>
	</div>

</div>
<br>

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
</div>

<script src="js/slideshow.js"></script>

		<article>
			<h2>New York Rangers</h2>
			<p class="col-xs-12 centered" class="intro">The New York Rangers are an American professional ice hockey team based in New York City that competes in the National Hockey League (NHL). They are a member club of the league's Metropolitan Division in the Eastern Conference. The team plays its home games at Madison Square Garden, located in the borough of Manhattan. The Rangers are one of three NHL franchises in the New York metropolitan area, along with the New Jersey Devils and New York Islanders. The club is also one of the oldest teams in the NHL, having joined in 1926 as an expansion franchise. They are part of the group of teams referred to as the Original Six, along with the Boston Bruins, Chicago Blackhawks, Detroit Red Wings, Montreal Canadiens and Toronto Maple Leafs. The Rangers were the first NHL franchise in the United States to win the Stanley Cup,which they have done four times, most recently in 1993–94.</p>			
		</article>
	</div> <!-- container -->
</body>

<?php include("inc/footer.inc");?>

</html>