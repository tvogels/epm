<?php

function page_active($page, $active) {
  return ($page == $active) ? 'active' : '';
}

function page_title($params) {
  if (!isset($params['page-title'])) {
    return t('pagetitle') . ': Getting It Done';
  } else {
    return t('pagetitle') . ' – ' . $params['page-title'];
  }
}

function epm_header($params) {
  global $lang;
  global $currentRoute;
  global $languages;
?>
<!DOCTYPE html>
<html lang="de" ng-app="epmApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php echo page_title($params) ?></title>
    <link rel="stylesheet" href="/css/epm.css"><link href='http://fonts.googleapis.com/css?family=Michroma:400|Roboto:400,300,500' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header class="global-header">
      <div class="container header-top">
        <h1 class="epm-logo" onclick="document.location.href='/'" style="cursor:pointer;">EPM: Getting it done</h1>
        <a href="#" id="menu-toggle">
          <span class="glyphicon glyphicon-align-justify"></span>
          <span class="glyphicon glyphicon-remove"></span>
        </a>
        <ul class="flags">
<?php
  foreach ($languages as $lng) {
    $active = ($lng === $lang) ? ' class="active"' : '';
    echo "<li$active><a href=\"" . path($currentRoute['route'], $lng) . "\"><img src=\"/img/flags/$lng.png\" alt=\"Switch Language\"></a></li>\n";
  }
?>    
        </ul>
        <ul class="global-nav">
          <li><a href="<?php echo path('home') ?>" class="<?php echo page_active('home', $params['active']) ?>"><?php echo t('nav.home') ?></a></li>
          <li><a href="<?php echo path('unternehmen') ?>" class="<?php echo page_active('unternehmen', $params['active']) ?>"><?php echo t('nav.unternehmen') ?></a></li>
          <li><a href="<?php echo path('leistung') ?>" class="<?php echo page_active('leistung', $params['active']) ?>"><?php echo t('nav.leistung') ?></a></li>
          <li><a href="<?php echo path('leadership') ?>" class="<?php echo page_active('leadership', $params['active']) ?>"><?php echo t('nav.leadership') ?></a></li>
          <li><a href="<?php echo path('jobs') ?>" class="<?php echo page_active('jobs', $params['active']) ?>"><?php echo t('nav.jobs') ?></a></li>
          <li><a href="<?php echo path('kontakt') ?>" class="<?php echo page_active('kontakt', $params['active']) ?>"><?php echo t('nav.kontakt') ?></a></li>
        </ul>
      </div>
<?php
}