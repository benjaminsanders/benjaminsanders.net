<?php
require_once("./assets/func.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/_386.css" rel="stylesheet">
    <link href="./assets/css/_386_dc.css" rel="stylesheet">
    <link href="./assets/css/_386_pre.css" rel="stylesheet">
	   <!-- jQuery Script -->
	<script src="./assets/js/jquery.js"></script>
	  
	<script>
	 $(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	 });
	</script>
	  
  </head>
<body>
<!--NAVBAR-->
	
	
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          </button>
          <a class="brand" href="./index.php"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./home.php">Home</a>
              </li>
			  <li class="">
                <a href="./about.php">About</a>
              </li>
			  <li class="">
                <a href="./skills.php">Skills</a>
              </li>
              <li class="active">
                <a href="./portfolio.php">Portfolio</a>
              </li>
			  <li class="">
                <a href="./contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!--/NAVBAR-->	
	
	
<!--BILLBOARD-->
<div class="container">
	<h1>Benjamin Sanders<br>&nbsp;</h1>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit-compact text-center">
		  <div class="row-fluid">
			  <div class="span12">
				  <h0>MY PORTFOLIO</h0>
			  </div>
		  </div>
      </div>

	
      <!-- Example row of columns -->
		<div class="row text-center">
			  <div class="span12 text-md">
				  <p>Examples</p> 
			  </div>
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>Coffee House</h3>
                    <p>A modern coffee &amp; cafe website with multiple online menus<hr>
						<span class="h4">HTML CSS JS</span></p>
				  </div></a>
              </div>
	
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>Car Mechanic</h3>
                    <p>A local mechanics shop with quote system for repairs<hr>
						<span class="h4">HTML CSS JS PHP</span></p>
				  </div></a>
              </div>
	
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>Surf Shop</h3>
                    <p>Set up for a small coastal shop with weather forecast<hr>
						<span class="h4">HTML CSS JS PHP JSON</span></p>
				  </div></a>
              </div>
	
			  <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>The Church</h3>
                    <p>A site for a small church, complete with digital online hymnal<hr>
						<span class="h4">HTML CSS JS PHP SQL</span></p>
				  </div></a>
              </div>
			</div>

<hr><br>

			<!-- SECOND ROW -->
 		<div class="row text-center">
			  <div class="span12 text-md">
				  <p>Creations &amp; Work</p> 
			  </div>
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>RetroForum</h3>
                    <p>A fully functional forum custom designed with the _386 theme.<hr>
						<span class="h4">HTML CSS JS PHP SQL</span></p>
				  </div></a>
              </div>
	
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>Car Mechanic</h3>
                    <p>A local mechanics shop with quote system for repairs<hr>
						<span class="h4">HTML CSS JS PHP</span></p>
				  </div></a>
              </div>
	
              <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>Surf Shop</h3>
                    <p>Set up for a small coastal shop with weather forecast<hr>
						<span class="h4">HTML CSS JS PHP JSON</span></p>
				  </div></a>
              </div>
	
			  <div class="span3">
				  <a href="#">
				  <div class="borderBlink">
                    <h3>The Church</h3>
                    <p>A site for a small church, complete with digital online hymnal<hr>
						<span class="h4">HTML CSS JS PHP SQL</span></p>
				  </div></a>
              </div>
			</div>
		<hr>
      
<!--/BILLBOARD-->
	
	
	
 	<footer>
		<div class="row">
			<div class="text-center span2">
				<p><a href="mailto:contact@benjaminsanders.net">Email</a></p>
			</div>
			<div class="text-center span8">
				<p><?=getMotto();?></p>
			</div>
			<div class="text-center span2">
				<p><?=date("m.d.y");?></p>
			</div>
		</div>
    </footer>
</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="./assets/js/widgets.js"></script>
    <script src="./assets/js/386.js"></script>
    <script src="./assets/js/transition.js"></script>
    <script src="./assets/js/alert.js"></script>
    <script src="./assets/js/modal.js"></script>
    <script src="./assets/js/dropdown.js"></script>
    <script src="./assets/js/scrollspy.js"></script>
    <script src="./assets/js/tab.js"></script>
    <script src="./assets/js/tooltip.js"></script>
    <script src="./assets/js/popover.js"></script>
    <script src="./assets/js/button.js"></script>
    <script src="./assets/js/collapse.js"></script>
    <script src="./assets/js/carousel.js"></script>
    <script src="./assets/js/typeahead.js"></script>
    <script src="./assets/js/affix.js"></script>

    <script src="./assets/js/holder.js"></script>
    <script src="./assets/js/prettify.js"></script>

    <script src="./assets/js/application.js"></script>
  </body>
</html>
