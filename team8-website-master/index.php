<!-- homepage that introduces the	website's	topic	and	introduces	three	sub-topics-->

<!doctype html>
<?php $thisPage="home"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Team 8 Website</title>

	<?php include("inc/top.inc");?>


	<!--Probably use a php include for the hero/header-->

	<?php include("inc/nav.inc");?>

<div class="yourSlider">
		<img src="images/panthergame.jpg" alt="Rangers vs. Panthers" data-slidecaption="Rangers fell 2-3 in a shootout to the Panthers on November 20.">
		<img src="images/bluejackets.jpg" alt="Rangers vs. BlueJackets" data-slidecaption="Rangers lost on the road to the Columbus Blue Jackets 2-4 on November 18.">
		<img src="images/canucks.jpg" alt="Rangers vs. Canucks" data-slidecaption="Rangers top the Canucks 7-2 on November 15.">
		<img src="images/oilers.jpg" alt="Rangers vs. Oilers" data-slidecaption="Rangers beat the Edmonton Oilers 3-1 on November 13!">
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
