
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Scott Connor | Web Designer</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Scott Connor  <small>Web Designer<small></small></a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container-fluid">

        <div class="col-sm-9 col-sm--3 col-md-10 col-md--2 main">
          <h1 class="page-header">Talk to me</h1>
<h4>TELL US ABOUT YOUR PROJECT</h4>

    <div class="container form">

      <div class="well">
        <h5 style="margin-bottom:-30px;">Tell us a bit about yourself:</h5>
        <form class="form-inline"  action="email.php" method="post">

          <div class="form-group">
            <label class="sr-only" for="name"></label>
            <input type="text" class="form-control" name="name"id="name" placeholder="Your Name">
          </div> 
          <div class="form-group">
            <label class="sr-only" for="organization"></label>
            <input type="text" class="form-control" name="organization" id="organization" placeholder="Organization">
          </div>

          <div class="form-group">
            <label class="sr-only" for="email"></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="tel"></label>
            <input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number">
          </div>
          <h5>And now a little about your project:</h5>
          <div class="form-group clearfix">
            <textarea id="message" class="form-control" name="message" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label class="sr-only" for="timeline"></label>
            <input type="text" class="form-control" name ="timeline" id="timeline" placeholder="Time Frame">
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="budget"></label>
            <input type="text" class="form-control" id="budget" name="budget" placeholder="Approximate Budget">
          </div>
          <div class="row">
              <input type="submit" class="btn btn-default btn-primary"></input>
          </div>
          
        </form>
      </div> <!-- well -->

        


       
        
        

        
      </form>
    </div>
  </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
