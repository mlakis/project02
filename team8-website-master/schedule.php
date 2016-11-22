<!-- each	with	its	own	subtopic	(related	to	the	overall	topic)2-->
<!-- Schedule-->

<!doctype html>
<?php $thisPage="page2"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Schedule</title>
	<?php include("inc/top.inc");?>
    <header>
	<h1><a href="index.php">New York Rangers</a></h1>
    </header>
	<!--Probably use a php include for the hero/header-->

	<?php include("inc/nav.inc");?>
	<article>
		<h2>October Schedule</h2>
		<table class="table-bordered">
				<caption class="tcaption"><strong><em>New York Rangers October Schedule</em></strong></caption>
				<tr class="trow">
					<th class="theader myCell">Date</th>
					<th class="theader myCell">Opponent</th>
					<th class="theader myCell">Location</th>
					<th class="theader myCell">Time</th>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/01/2016</td>
					<td class="tdescription myCell">NJD</td>
					<td class="tdescription myCell">@NJD</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/03/2016</td>
					<td class="tdescription myCell">PHI</td>
					<td class="tdescription myCell">@PHI</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/04/2016</td>
					<td class="tdescription myCell">NYI</td>
					<td class="tdescription myCell">@NYI</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/06/2016</td>
					<td class="tdescription myCell">PHI</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/13/2016</td>
					<td class="tdescription myCell">NYI</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/15/2016</td>
					<td class="tdescription myCell">STL</td>
					<td class="tdescription myCell">@STL</td>
					<td class="tdescription myCell">8:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/17/2016</td>
					<td class="tdescription myCell">SJS</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/19/2016</td>
					<td class="tdescription myCell">DET</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">8:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/23/2016</td>
					<td class="tdescription myCell">ARI</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/26/2016</td>
					<td class="tdescription myCell">BOS</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">8:00PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/28/2016</td>
					<td class="tdescription myCell">CAR</td>
					<td class="tdescription myCell">@CAR</td>
					<td class="tdescription myCell">7:30PM</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell">10/30/2016</td>
					<td class="tdescription myCell">TBL</td>
					<td class="tdescription myCell">@NYR</td>
					<td class="tdescription myCell">7:00PM</td>
				</tr>
			</table>
	</article>
	</div> <!-- container -->

</body>

<?php include("inc/footer.inc");?>


<script>
$(document).ready(function() {
		$('.myCell').on('mouseover', function() {
				$(this).closest('tr').addClass('highlight');
				$(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').addClass('highlight');
		});
		$('.myCell').on('mouseout', function() {
				$(this).closest('tr').removeClass('highlight');
				$(this).closest('table').find('.myCell:nth-child(' + ($(this).index() + 1) + ')').removeClass('highlight');
		});
});

</script>


</html>
