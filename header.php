<?php

function page_active($page, $active) {
  return ($page == $active) ? 'active' : '';
}

function page_title($params) {
  if (!isset($params['page-title'])) {
    return 'EPM: Getting It Done';
  } else {
    return 'EPM – ' . $params['page-title'];
  }
}

function epm_header($params) {
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
        <ul class="global-nav">
          <li><a href="/" class="<?php echo page_active('home', $params['active']) ?>">Home</a></li>
          <li><a href="/unternehmen.php" class="<?php echo page_active('unternehmen', $params['active']) ?>">Unternehmen</a></li>
          <li><a href="/leistung.php" class="<?php echo page_active('leistung', $params['active']) ?>">Leistung</a></li>
          <li><a href="/leadership.php" class="<?php echo page_active('leadership', $params['active']) ?>">Leadership</a></li>
          <li><a href="/jobs.php" class="<?php echo page_active('jobs', $params['active']) ?>">Jobs</a></li>
          <li><a href="/kontakt.php" class="<?php echo page_active('kontakt', $params['active']) ?>">Kontakt</a></li>
        </ul>
      </div>
<?php
}