<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Denver Area Nursing Jobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find Nursing jobs in Denver, Colorado at DenverNurses.com">
    <meta name="author" content="">
	<link rel="icon"  type="image/png"  href="/images/nurse.ico" />
 
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 20px 0;
		padding: 20px 10px;
        text-align: left;
		
		background-color:white;
		/*background-image:url('images/denver_nurses.jpg');
		background-repeat:no-repeat;
		background-position:right; */
		
      }
      .jumbotron h1 {
        font-size: 40px;
        line-height: 1;
      }
     
      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container-narrow">

      <?php include("header.php"); ?>

     

      <div class="jumbotron">
	   <hr>
        <h2>Questions or suggestions?</h2>
        <p class="lead">We would love to hear from you. Please send us your questions and suggestions usign the form bellow.</p>
		
        <hr>
      </div>
	  
	  <div class="row-fluid">
	  <div class="span12">
	  
  
  
  <form class="form-horizontal" method="post" action="sendmail.php">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Your Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="email" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Your Message</label>
    <div class="controls">
      <textarea name="message" rows="3"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Send</button>
    </div>
  </div>
</form>



	  </div>
	  </div>

      <div class="footer">
        <p>&copy; DenverNurses.com 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-1.8.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
<?php include("tracking.php"); ?>
  </body>
</html>
