
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brian Richardson - Resume</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/cover.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/rangeSlider.css" rel="stylesheet">
    <link href="../css/rangeSlider.skinSimple.css" rel="stylesheet">
    
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
        		<nav class="blog-nav pull-left">
          			<a class="blog-nav-item" href="../index.php">Home</a>
          			<a class="blog-nav-item" href="../about/index.php">About</a>
         			<a class="blog-nav-item" href="../code/index.php">Code Examples</a>
          			<a class="blog-nav-item active" href="../resume/index.php">Resume</a>
          			<a class="blog-nav-item" href="../contact/index.php">Contact</a>
        		</nav>
            </div>
          </div>

          <div>
            <h1>Thanks for taking a loook at my resume.</h1>
            <p class="lead">Move the slider below to browse my professional positions.</p>
          </div>
          <div class="mastfoot">
            <div>
             <div style="margin-bottom:50px; width:700px; margin-left:auto; margin-right:auto;">
             	<input type="text" id="slider" name="slider" value=""/>
             </div>
          </div>

        </div>

      </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/ion.rangeSlider.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script>
    	$("#slider").ionRangeSlider({
        	grid: true,
    	    from: 2000,
    	    values: ["2000", "2007", "2010", "2011", "2012", "2014", "2015"]
        	});
    </script>
  </body>
</html>
