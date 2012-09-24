<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <?= $template['partials']['metadata'] ?>
</head>

<body>
  <!-- container start -->
  <div class="container">
    <div class="row">
      <!-- content start -->
      <div id="main" role="main">
        <?= $template['body'] ?>
      </div>
      <!-- content end -->
    </div>
  </div>
  <!-- container end -->
  <?= $template['partials']['scripts'] ?>
</body>

</html>
