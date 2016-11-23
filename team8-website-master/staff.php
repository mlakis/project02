<!-- each	with	its	own	subtopic	(related	to	the	overall	topic)2-->
<!-- Coaching Staff-->

<!doctype html>
<?php $thisPage="page3"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Coaching Staff</title>
	<?php include("inc/top.inc");?>


<!--Probably use a php include for the hero/header-->

<?php include("inc/nav.inc");?>

		<article>
			<h2>Coaching Staff</h2>

			<table class="table-bordered">
				<caption class="tcaption"><strong><em>New York Rangers Coaching Staff</em></strong></caption>
				<tr class="trow">
					<th class="theader">Name</th>
					<th class="theader">Title</th>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell" id="alain">Alain Vigneault</td>
					<td class="tdescription myCell">Head Coach</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell" id="benoit">Benoit Allaire</td>
					<td class="tdescription myCell">Assistant and Goaltending Coach</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell" id="scott">Scott Arniel</td>
					<td class="tdescription myCell">Associate Coach</td>
				</tr>
				<tr class="trow">
					<td class="tdescription myCell" id="ulf">Ulf Samuelsson</td>
					<td class="tdescription myCell">Assistant Coach</td>

				</tr>
				<tr class="trow">
					<td class="tdescription myCell" id="darryl">Darryl Williams </td>
					<td class="tdescription myCell">Assistant Coach</td>
				</tr>
			</table>
		</article>

		<div id="alainModal" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content">
			    <span class="aclose close">×</span>
			    <img src="images/alain.jpg" alt="alain" />
			  </div>

			</div>

		<div id="benoitModal" class="modal">
				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="bclose close">×</span>
				    <img src="images/benoit.jpg" alt="alain" />
				  </div>

				</div>

				<div id="scottModal" class="modal">
					  <!-- Modal content -->
					  <div class="sclose modal-content">
					    <span class="close">×</span>
					    <img src="images/scott.jpg" alt="alain" />
					  </div>

					</div>

					<div id="ulfModal" class="modal">
							<!-- Modal content -->
							<div class="modal-content">
								<span class="uclose close">×</span>
								<img src="images/ulf.jpg" alt="alain" />
							</div>

						</div>

						<div id="darrylModal" class="modal">
							  <!-- Modal content -->
							  <div class="modal-content">
							    <span class="dclose close">×</span>
							    <img src="images/darryl.jpg" alt="alain" />
							  </div>

							</div>


</div> <!-- container -->
</body>

<?php include("inc/footer.inc");?>


<script>

//FROM http://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal


// Get the modal
var amodal = document.getElementById('alainModal');

// Get the button that opens the modal
var abtn = document.getElementById("alain");

// Get the <span> element that closes the modal
var aspan = document.getElementsByClassName("aclose")[0];

// When the user clicks the button, open the modal
abtn.onclick = function() {
    amodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
aspan.onclick = function() {
    amodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == amodal) {
        amodal.style.display = "none";
    }
}


// Get the modal
var bmodal = document.getElementById('benoitModal');

// Get the button that opens the modal
var bbtn = document.getElementById("benoit");

// Get the <span> element that closes the modal
var bspan = document.getElementsByClassName("bclose")[0];

// When the user clicks the button, open the modal
bbtn.onclick = function() {
    bmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
bspan.onclick = function() {
    bmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == bmodal) {
        bmodal.style.display = "none";
    }
}



// Get the modal
var smodal = document.getElementById('scottModal');

// Get the button that opens the modal
var sbtn = document.getElementById("scott");

// Get the <span> element that closes the modal
var sspan = document.getElementsByClassName("sclose")[0];

// When the user clicks the button, open the modal
sbtn.onclick = function() {
    smodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
sspan.onclick = function() {
    smodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == smodal) {
        smodal.style.display = "none";
    }
}


// Get the modal
var umodal = document.getElementById('ulfModal');

// Get the button that opens the modal
var ubtn = document.getElementById("ulf");

// Get the <span> element that closes the modal
var uspan = document.getElementsByClassName("uclose")[0];

// When the user clicks the button, open the modal
ubtn.onclick = function() {
    umodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
uspan.onclick = function() {
    umodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == umodal) {
        umodal.style.display = "none";
    }
}


// Get the modal
var dmodal = document.getElementById('darrylModal');

// Get the button that opens the modal
var dbtn = document.getElementById("darryl");

// Get the <span> element that closes the modal
var dspan = document.getElementsByClassName("dclose")[0];

// When the user clicks the button, open the modal
dbtn.onclick = function() {
    dmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
dspan.onclick = function() {
    dmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == dmodal) {
        dmodal.style.display = "none";
    }
}



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
