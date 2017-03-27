<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php /* body_class(); */?>>

  <div class="contener">
    <div class="header">
      <div class="header-top">
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" width="300" height="50"></a>
        <div class="header-desc"><?php wp_title( '' ); ?></div>
        <div class="search">
          <form id="searchform" method="get" action="<?php echo home_url(); ?>" role="search">
            <input class="searchfield" type="text" name="s" id="s" title="Введите запрос для поиска" value="Поиск на портале" onclick="javascript:if(value==" Поиск на портале "){value=" "}" onblur="javascript:if(value==" "){value="Поиск на портале "}">
            <input name="sbutt" type="submit" value="Найти" alt="Искать" class="searchsubmit">
          </form>
        </div>
        <a onclick="return add_favorite(this);" class="favorite" href="#"></a>
      </div>
      <div class="single-menu">
        <?php wpeHeadNav(); ?>
      </div>
      <div class="clear-device"></div>
    </div>
    <!-- end header -->
    <div class="clear"></div>
