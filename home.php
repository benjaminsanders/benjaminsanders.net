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

    <title>Benjamin Sanders</title>

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
              <li class="active">
                <a href="./home.php">Home</a>
              </li>
			  <li class="">
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
				  <h1>Software<br>Engineer</h1>
			  </div>
			  <div class="span6">
				  <h0>Benjamin Sanders</h0>
			  </div>
			  <div class="span3">
				  <h1>FullStack<br>Developer</h1>
			  </div>
		  </div>
      </div>

	
      <!-- Example row of columns -->
      <div class="row">
		  
        <div class="span4">
          <h2>About Me</h2> 
			<hr>
			<p>I am a <a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="<?=getAge(1);?>"><?=getAge(0);?></a> year old developer from <a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Rock Hill, SC">South Carolina</a> and currently living in <a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Denver, Colorado">Colorado</a> among the Rocky Mountains.</p>
			<p>Outside of coding I enjoy hiking with my dog <a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Australian Cattle Dog / Red Heeler">Stark</a>, exploring abandoned <a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Especially Victor, Colorado!">mining towns</a>, and visiting our wonderful National Parks.</p>
          
        </div>
		  
        <div class="span4">
          <h2>My Skills</h2>
		  <hr>
		  <p>AA in Business Management<br>2011<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="York Technical College<br>Rock Hill, SC" data-html="true">York Tech, SC</a></span></p>
		  <p>AA in CompSci, Programming<br>2019<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="York Technical College<br>Rock Hill, SC" data-html="true">York Tech, SC</a></span></p>
			<hr>
			<p>Favorite Languages</p>
			<p><span class="label label-success">C#</span> <span class="label label-success">C++</span> <span class="label label-success">JAVA</span> <span class="label label-success">PHP</span></p>
			<p><span class="label label-success">HTML</span> <span class="label label-success">CSS</span> <span class="label label-success">SQL</span> <span class="label label-success">JS</span></p>
          
       </div>
		  
        <div class="span4">
          <h2>Work &amp; Projects</h2>
			<hr>
		  <p>Web Developer<br>2010-2013<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Bearsa LLC<br>Rock Hill, SC" data-html="true">Bearsa LLC, SC</a></span></p>
		  <p>Software Developer<br>2013-2015<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Worldwide Harris Custom Service<br>Indianapolis, Indiana<br>Penrose, Colorado" data-html="true">WWHCS, IN</a></span></p>
		  <p>Lead Software Developer<br>2015-2017<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="Worldwide Harris Custom Service<br>Indianapolis, Indiana<br>Penrose, Colorado" data-html="true">WWHCS, IN</a></span></p>
		  <p>Contractor<br>2014-2017<span class="pull-right"><a href="#" data-toggle="tooltip" class="tool" data-placement="top" title="" data-original-title="SilverHawk Systems LLC<br>Colorado Springs, CO" data-html="true">SilverHawk LLC, CO</a></span></p>	
          
        </div>
		  
		<div class="span12">
			<div class="row">
				<div class="span4">
					<p><a class="btn btn-large" href="./about.php">View More</a></p>
				</div>
				<div class="span4">
					<p><a class="btn btn-large" href="./skills.php">View Details</a></p>
				</div>
				<div class="span4">
					<p><a class="btn btn-large" href="./portfolio.php">View Portfolio</a></p>
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
