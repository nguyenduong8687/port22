<?php 
  require_once('class.port22-news.php'); 
  $news = new port22News();
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

    <!-- Le googlie stats -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-21206115-4']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="container-narrow">

  <div class="jumbotron">
    <h1>Security News Feed.</h1>
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
