<head>
  <meta charset="utf-8">
  <title>Bootstrap, from Twitter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Le styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="http://localhost/pratiktour/wordpress/wp-content/uploads/2015/10/brand-logo.png" height="62" width="210" alt="Pratik Tour Logo">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <?php wp_list_pages(array('title_li' => '')); ?>
        </ul>
      </li>
    </ul>
    </div><!--/.navbar-collapse -->
  </div>
</nav>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">