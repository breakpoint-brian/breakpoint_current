
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IO Event Management</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    
    <style type="text/css">
  		pre.prettyprint {
    		border: 1px solid #ccc;
    		margin-bottom: 0;
    		padding: 9.5px;
  		}
  	</style>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="../index.php">Home</a>
          <a class="blog-nav-item" href="../about/index.php">About</a>
          <a class="blog-nav-item active" href="index.php">Code Examples</a>
          <a class="blog-nav-item" href="../contact/index.php">Contact</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">IO Event Management</h1>
        <p class="lead blog-description">A learning exercise using PHP, MySQL, JQuery and Twitter Bootstrap</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">The Overview</h2>
            <p class="blog-post-meta">Authored by: Brian Richardson</p>

            <article>
            	<h3>What it does</h3>
            	<p>Nearly 10 years ago while working in the audio visual industry I noticed there were was a lack
            	of industry specific tools that could streamline business operations and increase communication
            	between the company, it's employees, contractors and clients. There were applications out there
            	that could be adapted to fit the business process but there were still areas where the application
            	was lacking.</p>
            	<p>I was looking for a project to learn some new skills on and this one came to mind again when
            	talking with my brother about some of the problems he was facing with the software his company
            	uses to manage their labor. The idea was simple enough, all I had to do was learn how to wire it
            	all together.</p>
            	<p>My goal when I started was to make a very basic functional prototype of the application 
            	starting with a labor management system. In this particular industry, a labor management system
            	needs to focus in on a few key pieces of information: people, places, events and time. I decided
            	to create a CRUD for each item and a separate view for combining all the information in to a single
            	job. The articles below link to each view as I have completed it. My main focus is on client/server
            	communication so there are many elements in the UI that do not work, should be redesigned or should be removed entirely.
            	I'm just lazy and haven't done that kind of housekeeping yet.</p>	
            </article>    
          </div><!-- /.blog-post -->
          <div class="blog-post">
            <h2 class="blog-post-title">The Members view</h2>
            <p class="blog-post-meta">Authored by: Brian Richardson</p>

            <article>
            	<h3>Adding employees</h3>
            	<p>The members view is where a company would manage the internal employees and external contractors
            	that make up an on site production team. It consists of a simple CRUD interface where the user can
            	create new employees and contractors (an import/export csv feature is in the pipeline) and edit
            	their information. This is the where the list of available workers for each job is pulled from.
            	Below is a screen shot of the initial view. The actual page can be viewed 
            	<a href="http://www.breakpointdev.com/io/labor/index.php" target="_blank">here</a>.</p>
            	<figure style="padding-bottom:15px;">
            	<a href="../images/members.png" target="_blank"><img src="../images/members.png" 
            	style="height:300px; width:600px;" class="tutimg"></a>
            	<figcaption>The Members CRUD</figcaption>
            	</figure>	
            </article>    
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <img src="big-logo.png">
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About Selenium</h4>
            <p>Selenium is and has been the de facto web testing tool used by test engineers. It is extremely powerful, incredibly
            versatile and amazingly easy to pick up and start using. On top of all those things it is also open-source and free to
            use, and who doesn't like a free tool that also works really well?</p>
          </div>
          
          
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>&copy; 2015 Built by me.</p>
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
    <script src="../js/readmore.min.js"></script>
    <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script>
	$('article').readmore({
		collapsedHeight: 250,
		});
    </script>
  </body>
</html>
