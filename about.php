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

    <title>About Me</title>

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
			  <li class="active">
                <a href="./about.php">About</a>
              </li>
			  <li class="">
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
				  <h0>About Me</h0>
			  </div>
			  <div class="span3">
				  <h1></h1>
			  </div>
		  </div>
      </div>

	
      <!-- Example row of columns -->
      <div class="row">
		<div class="span3">
        <h2>Brief Timeline</h2>
        <hr>
        <p>1989<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="September 24th, 1989">Born</a><br></p>
			
		<p>1996-'08<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Graduated 2008 from Northwestern High School">K-12</a><br></p>
			
		<p>2008<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Freelance web developer out of High School">Web Dev</a><br></p>
			
		<p>2009-'11<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Associates in Business Management from York Technical College">College</a><br></p>
			
		<p>2012<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Met a man on a train and he offered me a job in Colorado.">Moved to CO</a><br></p>
			
		<p>2012-'17<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Surprisingly, it wasn't a trap &amp; there was a job in Colorado">Software Dev</a><br></p>
			
		<p>2017<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Moved back to SC to be with family and continue education.">Moved to SC</a><br></p>
			
		<p>2018-'19<a href="#" data-toggle="tooltip" class="tool pull-right" data-placement="top" title="" data-original-title="Associates in Computer Science Programming Specialization from York Technical College">More College</a><br></p>
       </div>  
          
          
        <div class="span6">
          <h2>About Me</h2> 
			<hr>
			<p>I am Benjamin Sanders &amp; I make things do cool stuff via code, electronics, &amp; mechanics.</p>
			<p>From an early age I loved playing with electronics and computers. During and after high school I continued my interests in electronics and coding, focusing more on software development during high school and web development afterwards.</p>
			<p>In my free time I enjoy hiking with my Red Heeler Stark, traveling to National Parks to collect hiking medallions, and various ['coding','mechanical','electrical'] projects.
			</p>
          
        </div>
		 
		<div class="span3">
			<h2>My Statistics</h2>
			<hr>
			<table width="100%" border="0" class="table table-condensed table-hover table-striped" style="cursor:pointer;">
			  <tbody>
				<tr>
				  <td>Age</td>
				  <td><?=getAge(0);?> Sols</td>
				</tr>
				<tr>
				  <td>Class</td>
				  <td>Engineer</td>
				</tr>
				<tr>
				  <td>My System</td>
				  <td>SOL-Terran</td>
				</tr>
				<tr>
				  <td>Birthdate</td>
				  <td>09.24.89E</td>
				</tr>
				<tr>
				  <td>Birthsign</td>
				  <td>The Lady</td>
				</tr>
				<tr>
				  <td>Birthstar</td>
				  <td>HearthFire</td>
				</tr>
				<tr>
				  <td>My Height</td>
				  <td>1.8m @ 1g</td>
				</tr>
				<tr>
				  <td>My Weight</td>
				  <td>80kg @ 1g</td>
				</tr>
				<tr>
				  <td>Dist&nbsp;Walked</td>
				  <td>20,824km</td>
				</tr>
				<tr>
				  <td>Dist Flown </td>
				  <td>19,384km</td>
				</tr>
			  </tbody>
			</table>
			
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
