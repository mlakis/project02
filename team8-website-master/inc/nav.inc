<nav class="navbar">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    &#9776;
		</button>
	</div> <!--navbar heder-->

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li <?php if($thisPage=="home") { echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
			<li <?php if($thisPage=="page1") { echo 'class="active"'; } ?>><a href="roster.php">Roster</a></li>
			<li <?php if($thisPage=="page2") { echo 'class="active"'; } ?>><a href="schedule.php">Schedule</a></li>
			<li <?php if($thisPage=="page3") { echo 'class="active"'; } ?>><a href="staff.php">Coaching Staff</a></li>
			<li <?php if($thisPage=="page4") { echo 'class="active"'; } ?>><a href="colophon.php">Colophon</a></li>
		</ul>
	</div> <!-- nav collapse -->
</div> <!-- container fluid -->
</nav>
