<?php include("../php/updatemodal.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breakpoint - QA, Automation, Development</title>
	
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../breakpoint-custom.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
    
    <!-- Additional styles -->
    <link href="../breakpoint.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding-top:70px;">

    <div class="container">
      <div>
        <div class="navbar navbar-default navbar-fixed-top navcolor">
			<div class="container">
				<div class="navbar-header">
					<a href="" class="navbar-brand" style="padding-top:3px;"><img src="../images/logo.png"></a>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					
					<span class="sr-only">Toggle navigation</span>
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="list">
						<li><a href="../index.html">Home</a></li>
						<li><a href="">Quality Assurance</a></li>
						<li><a href="">Development</a></li>
						<li class="active"><a href="adv.html">Adventures</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
        <!-- End Navigation -->

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">"Life is an adventure, not a package tour"</h1>
        <p class="lead blog-description">-Eckhart Tolle</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="row">
  			<div class="col-sm-4 col-md-6" id="november">
    			<div class="thumbnail">
      				<img src="../images/1127thumb.png" alt="...">
      				<div class="caption">
        				<h3>Return to the Gulf</h3>
        				<p class="blogcaption">A third solo trip down the beach in search of big fish</p>
        				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#gulfreturn">
  Read more</button>
      				</div>
    			</div>
  			</div>
  			<!-- End section -->
  			<div class="col-sm-4 col-md-6" id="november">
    			<div class="thumbnail">
      				<img src="../images/124thumb.png" alt="...">
      				<div class="caption">
        				<h3>Early Birds</h3>
        				<p class="blogcaption">Early morning surprises when things don't go as planned</p>
        				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#early">
  Read more</button>
      				</div>
    			</div>
  			</div>
  			<!-- End section -->
		</div>
		
		<div class="row">
			<div class="col-sm-4 col-md-6" id="october">
    			<div class="thumbnail">
      				<img src="../images/113thumb.png" alt="...">
      				<div class="caption">
        				<h3>It was only by chance</h3>
        				<p class="blogcaption">A chance encounter while wandering in the country.</p>
        				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#chance">
  Read more</button>
      				</div>
    			</div>
  			</div>
  			<!-- End section -->
			<div class="col-sm-4 col-md-6" id="april">
    			<div class="thumbnail">
      				<img src="../images/417thumb.png" alt="...">
      				<div class="caption">
        				<h3>Find your beach</h3>
        				<p>...</p>
        				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#july4">
  Read more</button>
      				</div>
    			</div>
  			</div>
  			<!-- End section -->
		</div>
		
		<div class="row">
			<div class="col-sm-4 col-md-6" id="june">
    			<div class="thumbnail">
      				<img src="../images/531thumb.png" alt="...">
      				<div class="caption">
        				<h3>We went back for more</h3>
        				<p class="blogcaption">A second trip to the Gulf coast and it was just as good as the first.</p>
        				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#gulf2">
  Read more</button>
      				</div>
    			</div>
  			</div>
  			<!-- End section -->
			<div class="col-sm-4 col-md-6" id="july">
    			<div class="thumbnail">
      				<img src="../images/47thumb.png" alt="...">
      				<div class="caption">
        				<h3>Who doesn't like fireworks?</h3>
        				<p class="blogcaption">Charred meat, beer, and flaming balls of fire. What could go wrong?</p>
      					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#july4">
  Read more</button>

      				</div>
    			</div>
  			</div>
  			<!-- End section -->
		</div>
          <!-- 
<nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
 -->

        </div><!-- /.blog-main -->
        
<!--  july4 Modal -->
		<div class="modal fade" id="july4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h4 class="modal-title" id="myModalLabel">Who doesn't like fireworks?</h4>
      		</div>
      		<div class="modal-body">
      			<div id="carousel-july4" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-july4" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-july4" data-slide-to="1"></li>
    					<li data-target="#carousel-july4" data-slide-to="2"></li>
    					<li data-target="#carousel-july4" data-slide-to="3"></li>
    					<li data-target="#carousel-july4" data-slide-to="4"></li>
    					<li data-target="#carousel-july4" data-slide-to="5"></li>
    					<li data-target="#carousel-july4" data-slide-to="6"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="../images/carousel/fw5sm.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/fw7sm.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/fw9sm.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/fw12.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/fw16.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/photo.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/photo1.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-july4" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#carousel-july4" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
				<h2>pyrotechnics</h2>
				<p><em>noun</em></p>
				<ul id="blog-list">
					<li>the art of making or displaying fireworks</li>
				</ul>
        		<p><?php echo $fireworks;  ?></p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
  		</div>
		</div>
<!-- End Modal -->

<!--  gulf Modal -->
		<div class="modal fade" id="gulf2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h4 class="modal-title" id="myModalLabel">We went back for more</h4>
      		</div>
      		<div class="modal-body">
      			<div id="carousel-gulf2" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-gulf2" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="1"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="2"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="3"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="4"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="5"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="6"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="7"></li>
    					<li data-target="#carousel-gulf2" data-slide-to="8"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="../images/carousel/g22.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g23.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g24.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g25.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g26.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g27.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g28.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g29.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/g212.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-gulf2" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#carousel-gulf2" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    				<span class="sr-only">Next</span></a>
			</div>
				<h2>"There's a fine line between fishing and standing on the shore like an idiot"</h2>
				<p>-Steven Wright</p>
				<p><?php echo $g2; ?></p>
			</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
  		</div>
		</div>
<!-- End Modal -->

	<!--  gulf Modal -->
		<div class="modal fade" id="chance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h4 class="modal-title" id="myModalLabel">It was only by chance</h4>
      		</div>
      		<div class="modal-body">
      			<div id="carousel-chance" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-chance" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-chance" data-slide-to="1"></li>
    					<li data-target="#carousel-chance" data-slide-to="2"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="../images/carousel/chance1.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/chance2.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/chance3.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-chance" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#carousel-chance" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    				<span class="sr-only">Next</span></a>
			</div>
				<h2>Come with me, let's get off the couch and outside. It's a gorgeous day.</h2>
				<p><?php echo $chance; ?></p>
			</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
  		</div>
		</div>
<!-- End Modal -->

	<!--  gulfreturn Modal -->
		<div class="modal fade" id="gulfreturn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h4 class="modal-title" id="myModalLabel">Return to the gulf</h4>
      		</div>
      		<div class="modal-body">
      			<div id="carousel-gulfreturn" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-gulfreturn" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-gulfreturn" data-slide-to="1"></li>
    					<li data-target="#carousel-gulfreturn" data-slide-to="2"></li>
    					<li data-target="#carousel-gulfreturn" data-slide-to="3"></li>
    					<li data-target="#carousel-gulfreturn" data-slide-to="4"></li>
    					<li data-target="#carousel-gulfreturn" data-slide-to="5"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="../images/carousel/b07.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/b06.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/b05.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/b04.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/b03.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/b01.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-gulfreturn" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#carousel-gulfreturn" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    				<span class="sr-only">Next</span></a>
			</div>
				<h2>"If I fished only to capture fish, my fishing trips would have ended long ago"</h2>
				<p>Zane Grey</p>
				<p><?php echo $gulfReturn; ?></p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
  		</div>
		</div>
<!-- End Modal -->

	<!--  early Modal -->
		<div class="modal fade" id="early" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<h4 class="modal-title" id="myModalLabel">Early Birds</h4>
      		</div>
      		<div class="modal-body">
      			<div id="carousel-early" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-early" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-early" data-slide-to="1"></li>
    					<li data-target="#carousel-early" data-slide-to="2"></li>
    					<li data-target="#carousel-early" data-slide-to="3"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="../images/carousel/e01.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/e02.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/e03.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
    					<div class="item">
      						<img src="../images/carousel/e04.png" alt="...">
      						<div class="carousel-caption">
      						</div>
    					</div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-gulfreturn" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#carousel-gulfreturn" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    				<span class="sr-only">Next</span></a>
			</div>
				<h2>Do you ever just wake up and go "NOPE!" and roll over and go back to sleep?</h2>
				<p><?php echo $earlyBird;?></p>
			</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
  		</div>
		</div>
<!-- End Modal -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Husband, father, brother and son. An avid outdoorsman that loves getting up close and personal with the world around him. These are some of the more notable adventures I have had over the past year when I have gotten the chance to explore the world.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#april">April 2014</a></li>
              <li><a href="#june">June 2014</a></li>
              <li><a href="#july">July 2014</a></li>
              <li><a href="#october">October 2014</a></li>
              <li><a href="#november">November 2014</a></li>
            </ol>
          </div>
          <!-- 
<div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
 -->
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>

      <footer class="footer">
        <p>&copy; Brian Richardson 2014</p>
        <p>
        <a href="#">Back to top</a>
      </p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </script>
  </body>
</html>