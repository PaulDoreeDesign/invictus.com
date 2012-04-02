<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Invictus Games <?php echo $meta ? $meta->title : '' ?></title>
    
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $meta ? $meta->description : 'Invictus Games' ?>">
    <meta name="keywords" content="<?php echo $meta ? $meta->keywords : 'Invictus Games' ?>">
    <meta name="author" content="Attila Dobi, Invictus Games Ltd.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    
    <meta property="og:title" content="<?php echo $meta ? $meta->og_title : 'Invictus Games' ?>" />
    <meta property="og:type" content="<?php echo $meta ? $meta->og_type : 'game' ?>" />
    <meta property="og:url" content="<?php echo $meta ? $meta->og_url : base_url() ?>" />
    <meta property="og:image" content="<?php echo $meta ? $meta->og_image : '' ?>" />    
    <meta property="og:description" content="<?php echo $meta ? $meta->og_description : '' ?>" />    
    <meta property="og:site_name" content="<?php echo $meta ? $meta->og_site_name : 'Invictus Games' ?>" />    
    <meta property="fb:app_id" content="<?php echo $settings ? $settings->facebook_app_id : '' ?>" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php if (ENVIRONMENT==="development"): ?>
      <link rel="stylesheet/less" type="text/css" href="<?= base_url() ?>css/invictus/all.less">
      <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/lessjs/less-1.3.0.min.js"></script>
      <script type="text/javascript">
        (less = less || {}).env = 'development';
        //less.watch();        
      </script>
    <?php else: ?>
      <link rel = "stylesheet" type="text/css" href="<?= base_url() ?>css/invictus/all.css">
    <?php endif ?>  
    
    <!--[if IE]>
      <link href="<?php echo base_url() ?>/css/invictus/ie.css" rel="stylesheet" type="text/css" >
    <![endif]-->
    <!--[if IE]>
      <?php if (ENVIRONMENT === 'development'): ?>
        <script type="text/javascript" src="https://getfirebug.com/releases/lite/1.3/firebug-lite.js"></script>
      <?php endif ?>
      <script src="https://raw.github.com/scottjehl/Respond/master/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $settings ? $settings->facebook_app_id : '' ?>";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>    
    
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="btn btn-navbar bigger-font" href="#" style="padding-top:5px;padding-bottom:4px;"><span class="icon-zoom-in icon-white"></span></a>
          <a class="brand" href="<?php echo base_url() ?>">
            <?php if ($settings->logo): ?>
              <img src="<?php echo base_url() ?>uploads/original/<?php echo $settings->logo ?>" alt="">
            <?php else: ?>
              Invictus Games
            <?php endif ?>
          </a>
          
          <div class="nav-collapse">
            <ul class="nav">
              
              <li <?php echo !$this->uri->segment(1) ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>"><i class="home-icon"></i>Home</a></li>
              <li <?php echo $this->uri->segment(2) === 'contact' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>pages/contact"><i class="contact-icon"></i>Contact</a></li>
              <li <?php echo $this->uri->segment(2) === 'jobs' ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>pages/jobs"><i class="jobs-icon"></i>Jobs</a></li>
            </ul>
            
            <ul class="nav span4 pull-right more-games">
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="games-icon"></i>More games <b class="caret"></b></a>
                <ul class="span4 dropdown-menu all-games-dropdown-menu">
                  <?php foreach ($more_games as $item): ?>
                    <?php if ($item): ?>
                      <li>
                        <a href="<?php echo base_url() ?>games/<?php echo $item->url ?>">
                          <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->logo ?>" alt="">
                          <span><?php echo $item->name ?></span>
                        </a>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>
                  <!-- <li class="divider"></li> -->
                  <li><a href="<?php echo base_url() ?>games/all" class="all-games-link"><strong>All games &raquo;</strong></a></li>
                </ul>
              </li>
            </ul>
          
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container" id="container">          