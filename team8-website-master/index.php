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

<div class="yourSlider">
		<img src="images/newpic1.jpg" alt="Rangers Goal" data-slidecaption="Grabner giving the Rangers a 1-0 lead!.">
		<img src="images/newgoaliepic.jpg" alt="Goalie Save" data-slidecaption="Henrik saving the day!">
		<img src="images/winoverboston.jpg" alt="Win over Boston" data-slidecaption="Rangers beat Boston 5-2 on October 26 to bump their win streak up tp 4!">
		<img src="images/seasonopener.jpg" alt="Goal in season opener" data-slidecaption="Rangers open up the season with a 5-3 win over the Islanders!">
</div>

<br>

<script src="js/slideshow.js"></script>

		<article>
			<h2>New York Rangers</h2>
			<p class="col-xs-12 centered" class="intro">The New York Rangers are an American professional ice hockey team based in New York City that competes in the National Hockey League (NHL). They are a member club of the league's Metropolitan Division in the Eastern Conference. The team plays its home games at Madison Square Garden, located in the borough of Manhattan. The Rangers are one of three NHL franchises in the New York metropolitan area, along with the New Jersey Devils and New York Islanders. The club is also one of the oldest teams in the NHL, having joined in 1926 as an expansion franchise. They are part of the group of teams referred to as the Original Six, along with the Boston Bruins, Chicago Blackhawks, Detroit Red Wings, Montreal Canadiens and Toronto Maple Leafs. The Rangers were the first NHL franchise in the United States to win the Stanley Cup,which they have done four times, most recently in 1993–94.</p>
		</article>
	</div> <!-- container -->

</body>

<?php include("inc/footer.inc");?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="//www.builtbyevolve.com/files/nerveSlider/jquery.nerveSlider.min.js"></script>
<script>
$(document).ready(function(){
	$(".yourSlider").nerveSlider({
		sliderWidth: "1000px",
		sliderHeight: "400px",
		sliderResizable: true
		// etc...
	});
});
</script>

</html>
