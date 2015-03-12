<?php 
include("mail.php");
?>
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
    <link href="../css/styles.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="../index.php">Home</a>
          <a class="blog-nav-item" href="../about/index.php">About</a>
          <a class="blog-nav-item" href="../code/index.php">Code Examples</a>
          <a class="blog-nav-item active" href="../contact/index.php">Contact</a>
        </nav>
      </div>
    </div>

    <div class="container">
    	<div class="col-md-10">
    		<img src="../images/contact_us.jpg" style="padding-bottom:20px;" />
			<?php echo $result; ?>
      		<form method="post" id="contactForm" style="padding-bottom:20px;">
      			<div class="form-group">
      				<label for="email">Email</label>
      				<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
      			</div>
      			<div class="form-group">
      				<label for="subject">Subject</label>
      				<input type="text" name="subject" id="subject" class="form-control" placeholder="Enter text here">
      			</div>
      			<div class="form-group">
      				<label for="message">Message</label>
      				<textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="5"></textarea>
      			</div>
      			<input type="submit" class="btn btn-default" name ="submit" value="Submit">
      		</form>
      	</div>
    </div><!-- /.container -->


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
