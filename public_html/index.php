<?php 
  require_once('class.port22-news.php'); 
  //require_once('class.port22-pages.php'); 
  $news = new port22News();
  // $page = new port22Pages();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>#:Port 22 - Security News Feed.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le Javascript -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/port22.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="container-narrow">

  <div class="jumbotron">
    <h1>Security News Feed. TESTING</h1>
    <p class="lead">For the latest and greatest security feeds on the net.</p>
  </div>

  <hr>
    <div class="row-fluid marketing">
      <div class="span12">
<?php $news->getLinks(50); ?>
      </div>
    </div>
  <hr>
  <p align=center>There are <b><?php echo $news->getTotalLinks(); ?></b> links.</p>
  </div>
  </body>
</html>
