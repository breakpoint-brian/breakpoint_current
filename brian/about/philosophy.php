
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brian Richardson</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">Philosophy</a>
          <a class="blog-nav-item" href="#">Code Exmaples</a>
          <a class="blog-nav-item" href="#">Resume</a>
          <a class="blog-nav-item" href="#">Contact</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">What I've learned</h1>
        <p class="lead blog-description">Thoughts and responses to common questions.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">The Basics</h2>
            <p class="blog-post-meta">My general philosophy</p>

            <p>QA as a discipline has evolved at an incredible rate from the days when I started testing. 
            When I started as a test engineer our test cases came in the form of 5000 page tomes that were distributed among the various
            testers. Our test results were recorded in red ink in the packet and if a bug was encountered it was noted in the packet and
            a simple bug was filed. Our test connections were done using 28.8 and, if you were senior level, 56k modems. It was a simpler
            time where brute force was still one of the best ways to test software.</p>
            <p>Today the brute force method is generally frowned upon, but, has been known to make an appearance during crunch times.
            When I have interviewed for test engineer positions in the past much of the discussion has been in the area of my personal
            philosophy and approach to testing and where a test egnineer fits in on the team. Since this has been a point of interest for
            so many hiring managers, I have compiled a simple "FAQ" to give a brief overview on these topics.</p>
            <br />
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingOne">
      					<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          					Do you enjoy testing?
        				</a>
      					</h4>
    				</div>
    				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      					<div class="panel-body">
      						Yes, I do enjoy testing. It offers a unique perspective on software development and presents challenges that
      						are not found in many other professions. 
      					</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingTwo">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         					 Manual or Automated testing?
        				</a>
      					</h4>
    				</div>
    				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      					<div class="panel-body">
        					This is a tough question. The speed of development today demands automation. However, there is a lot to be 
        					said about the human element of testing. My general test strategy usually involves a mix of both manual
        					testing and automation. 	
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingThree">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          					How would you define quality?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      					<div class="panel-body">
        					It is the adherance to the specifications provided by the customer. In other words, does the software perform,
        					behave and look like it was intended to. 
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingFour">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          					Who is responsible for quality?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      					<div class="panel-body">
        					Everybody.
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingFive">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          					Do you like working with developers?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      					<div class="panel-body">
        					It can be tricky at times. Especially when the objectives of each team are at odds. Overall though I believe
        					that having access to developers greatly increases the quality of the tests that are performed and how the
        					results are interpreted.  
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingSix">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          					What makes a good test case?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      					<div class="panel-body">
        					Everyone has a slightly different way of writing test cases. However, a good test case will generally have the
        					following items somewhere in the test case:
        					<ul>
        						<li>Test ID</li>
        						<li>Title</li>
        						<li>Prerequisites/test data</li>
        						<li>Priority</li>
        						<li>Test instructions/steps</li>
        						<li>Expected Result</li>
        						<li>Test result</li>
        					</ul>  
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingSeven">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          					What makes a good bug report?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      					<div class="panel-body">
        					Like test cases, everyone has a slightly different way of writing bugs. My preferred method of writing bugs
        					will contain the following elements:
        					<ul>
        						<li>Test ID</li>
        						<li>Title/Summary of issue</li>
        						<li>Prerequisites/test data</li>
        						<li>Severity</li>
        						<li>Repeatable instructions/steps</li>
        						<li>Expected Result</li>
        						<li>Actual Result</li>
        						<li>Logs, screenshots, etc.</li>
        					</ul>  
        				</div>
    				</div>
  				</div>
  				<div class="panel panel-info">
    				<div class="panel-heading" role="tab" id="headingEight">
      					<h4 class="panel-title">
        				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          					What is more important, quality or assurance?
      					</a>
      					</h4>
    				</div>
    				<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      					<div class="panel-body">
        					Assurance. Quality is relative and is quite difficult to measure. It is much easier to provide assurance in regard
        					to how something is working relative to requirements.
        				</div>
    				</div>
  				</div>
			</div>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About Me</h4>
            <p>I have been a software quality assurance professional for over fifteen years in Austin, TX. When I am not in front of a
            computer I can be found building Minecraft masterpieces with my son, strumming a guitar, planning my next shark fishing trip,
            </p>
            </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
