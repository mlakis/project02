<!-- colophon page that introduces the	team members-->

<!doctype html>
<?php $thisPage="page4"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colophon</title>

	<?php include("inc/top.inc");?>
    <header>
	<h1><a href="index.php">New York Rangers</a></h1> 
    </header>
	<!--Probably use a php include for the hero/header-->

	<?php include("inc/nav.inc");?>
	<article>
		<h2>Team Members</h2>
		<table class="table-bordered">
				<caption class="tcaption"><strong><em>Team 8 Members</em></strong></caption>
				<tr class="trow">
					<th class="theader">Name</th>
					<th class="theader">Role</th>
					<th class="theader">Tasks Completed</th>
					<th class="theader">Class Year</th>
				</tr>
				<tr class="trow">
					<td class="tdescription">Yukako Ito</td>
					<td class="tdescription">Architect</td>
					<td class="tdescription"><p>Upon setting up the repo and code base for the project, working with the team to be punctual and functional. Made decisions to utilize bootstrap.</p></td>
					<td class="tdescription">2017</td>
				</tr>
				<tr class="trow">
					<td class="tdescription">Annie Zhang</td>
					<td class="tdescription">Framework Wrangler</td>
					<td class="tdescription"><p>Implemented the framework Bootstrap to give the webpage a general structure. Used Bootstrap to implement a hamburger menu in mobile view or smaller windows.</p></td>
					<td class="tdescription">2017</td>
				</tr>
				<tr class="trow">
					<td class="tdescription">Carolyn Zelicof</td>
					<td class="tdescription">Content Master and Designer</td>
					<td class="tdescription"><p>Did research on the topic and wrote all of the HTML. Created the structure of the website through the content. </p></td>
					<td class="tdescription">2019</td>
				</tr>
				<tr class="trow">
					<td class="tdescription">Rebecca Van Dyke</td>
					<td class="tdescription">JavaScript Coder</td>
					<td class="tdescription"><p>Fully implemented slideshow using JavaScript and CSS. Slideshow scrolls automatically and user can jump between pictures using the dots at the bottom</p></td>
					<td class="tdescription">2017</td>
				</tr>
				<tr class="trow">
					<td class="tdescription">Jie Deng</td>
					<td class="tdescription">CSS Artist</td>
					<td class="tdescription"><p>Customized the CSS file that overrides the bootstrap framework to meet our theme</p></td>
					<td class="tdescription">2017</td>
				</tr>
			</table>		
	</article>
	</div> <!-- container -->

</body>

<?php include("inc/footer.inc");?>

</html>