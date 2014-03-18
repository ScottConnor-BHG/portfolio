<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DeepRooted | Web Design</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--   <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner"> -->
  <!-- <div class="container-fluid"> -->
<!--         <div id="navArrow">
            <img src="img/darrow1.png"/>
        </div>
 -->    <nav class="navbar navbar-default" id="header"   role="navigation">
     <!-- Brand and toggle get grouped for better mobile display --> 
    <div class="navbar-header" style="background-color: rgb(166, 181, 40);">
      <button type="button" class="navbar-toggle" style="background-color: rgb(166, 181, 40);" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
      <a class="navbar-brand" id="logo"  href="index.php" ><h1><img src="img/logo2.png"/></h1></a>
      
    </div>
    <div class="collapse navbar-collapse bs-navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: rgb(166, 181, 40);height:400px;min-width:1040px;" role="navigation">
<!--       <ul class="nav navbar-nav ">
        <li class="brand"><a class="navbar-brand" id="logo"  href="" disabled><img src="img/logo2.png"/></a></li>
      </ul> -->
        
      <ul class="nav navbar-nav navbar-right"  >
        
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="company.php">company</a></li>
        <li><a href="">About</a></li>
        
        <li><a href="#"><small>Services</small></a></li>
        <li><a href="#"><small>Process</small></a></li>
        <li><a href="#"><small>Content</small></a></li>
        <!-- <form class="navbar-form navbar-left" role="search"> -->
        <li>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </li>
      </form>
       <!--  </form>  -->     
      </ul>

    </div>
  </div>
</nav>
 
<!-- </header> -->

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="container-liquid body" id="content">
  <div class="well  clearfix">
  <div class="well  clearfix" >
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-sm-push-8" style="min-height: 100px;">
        <div class="sticky-nav affix" data-spy="affix" data-offset-top="122" id="rightNav">
              </ul>
            <ul class="list-group">
            <li class="list-group-item"><a id="resume" href="#resume">Resume</a></li>
             <ul class="submenu">
              <li><IFRAME id="resume"src="tmp/final_resume.pdf" width="100%" height="100%" frameborder="no" scrolling="no"></IFRAME></li>
              
            </ul>
            <li class="list-group-item"><a href="#">Resume</a></li>
            <li class="list-group-item"><a href="#">Resume</a></li>
            <li class="list-group-item"><a href="#">Resume</a></li>
            <li class="list-group-item"><a href="#top">Back to Top</a></li>
            
            </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-sm-pull-4 help-content-container">
          <a name="resume"></a>
          <div class="well left-content  clearfix">
            <!-- <IFRAME id="resume"src="tmp/final_resume.pdf" width="100%" height="815px" padding="0" margin="0" frameborder="no" scrolling="auto"></IFRAME> -->
          </div>
      </div>
    </div>
    </div>
  </div>
</div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
          //make submenus appear 
      $('.submenu').hide();
      //slide down submenu if has one
      $("li:has(ul)").click(function(){

      $("ul",this).slideDown();
      });

      // $(function(){
      // $('#resume').show();
      // });
    
    // $(elem).show();
    </script>
  </body>
</html>
