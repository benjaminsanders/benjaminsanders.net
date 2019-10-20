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

    <title>My Skills</title>

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
			  <li class="active">
                <a href="./skills.php">Skills</a>
              </li>
              <li class="">
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
			  <div class="span3">
				  <h1></h1>
			  </div>
			  <div class="span6">
				  <h0>Skills &amp; Abilities</h0>
			  </div>
			  <div class="span3">
				  <h1></h1>
			  </div>
		  </div>
      </div>

	
      <!-- Example row of columns -->
      <div class="row">
		  
        <div class="span4">
			<h2>Web Development</h2>
			<hr><br>
			<p><span class="">HTML</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░ <span class="scrolltext">16 Years</span></p>
			<p><span class="">CSS&nbsp;</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░ <span class="scrolltext">16 Years</span></p>
			<p><span class="">JS&nbsp;&nbsp;</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░ <span class="scrolltext">8 Years</span></p>
			<p><span class="">PHP&nbsp;</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░ <span class="scrolltext">12 Years</span></p>
        </div>
		  
        <div class="span4">
          	<h2>Education &amp; Certifications</h2>
			<hr>
			
			<p>AA in Business Management<br>2011<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="York Technical College<br>Rock Hill, SC" data-html="true">York Tech, SC</a></span></p>
		  	<p>AA in CompSci, Programming<br>2019<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="York Technical College<br>Rock Hill, SC" data-html="true">York Tech, SC</a></span></p>
			<p>Colorado Notary Public<br>2017-Current<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Colorado Secretary of State" data-html="true">Colorado</a></span></p>
        </div>
		  
	    <div class="span4">
          	<h2>Software Development</h2>
			<hr><br>
			<p><span class="">C#&nbsp;&nbsp;</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░ <span class="scrolltext">8 Years</span></p>
			<p><span class="">C++&nbsp;</span> ▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░ <span class="scrolltext">4 Years</span></p>
			<p><span class="">JAVA</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░ <span class="scrolltext">7 Years</span></p>
			<p><span class="">SQL&nbsp;</span> ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░ <span class="scrolltext">12 Years</span></p>
        </div>
		
		  
		<div class="span12 text-center">
			<hr>
			<p><span class="text-lg">Development Process</span></p>
			<div class="text-center">
				<p><span class="text-xl">Concept ⟶ Design ⟶ Coding ⟶ Deploy&nbsp;</span></p>
			</div>
			<div class="row-fluid text-center">
				<div class="span3">
					<p><span class="text-md">Determine Scope</span></p>
				</div>
				<div class="span3">
					<p><span class="text-md">Create Solution</span></p>
				</div>
				<div class="span3">
					<p><span class="text-md">Build Features</span></p>
				</div>
				<div class="span3">
					<p><span class="text-md">Launch Project</span></p>
				</div>
			</div>
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
