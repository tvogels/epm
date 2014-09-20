<?php

require_once("vendor/autoload.php");
require_once("config.php");

use Symfony\Component\Yaml\Parser;


// Redirect to the page without .PHP extension and trailing /
$url = $_SERVER['REQUEST_URI'];
$url = preg_replace('/\?.*/', '', $url);
if ('.php' === substr($url,strlen($url)-4,4)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . substr($url, 0, strlen($url) - 4));
    exit;
}
if ('/' === substr($url,strlen($url)-1,1) && strlen($url) > 1) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . substr($url, 0, strlen($url) - 1));
    exit;
}

// Construct a list of routes to match
$urlMap = array();
foreach ($routes as $key => $values) {
    foreach ($languages as $lang) {
        $urlMap[$values['url'][$lang]] = array(
            'route' => $key,
            'lang' => $lang,
            'file' => $routes[$key]['file']
        );
    }
}

$lang = null;

// generate paths
function path($route, $lng = null) {
    global $routes, $lang;
    if ($lng === null)
        $lng = $lang;
    return $routes[$route]['url'][$lng];
}



// match url with route
if (!array_key_exists($url, $urlMap)) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Page not found";
    exit;
} else {
    $currentRoute = $urlMap[$url];
    $lang = $currentRoute['lang'];
}


// load texts
$yaml = new Parser();
$texts = $yaml->parse(file_get_contents('translations/'.$lang.'.yml'));

function t($key) {
    global $texts;
    $components = explode(".", $key);
    $cur = $texts;
    foreach ($components as $comp) {
        if (isset($cur[$comp])) $cur = $cur[$comp];
        else return '['.strtoupper($key).']';
    }
    return $cur;
}

// load the page
require_once('content/'.$currentRoute['file']);