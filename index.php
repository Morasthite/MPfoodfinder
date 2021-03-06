<?php
session_start();
require_once('credentials.php');
require_once('library/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php');
$fb = new Facebook\Facebook([
    'app_id'                => FACEBOOK_APP_ID,
    'app_secret'            => FACEBOOK_SECRET,
    'default_graph_version' => FACEBOOK_GRAPH_VERSION,
]);
?>
<!--Angular application is declared with the 'ng-app' directive-->
<html ng-app="routeApp">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food Decider</title>
  <!--Bootstrap CDN -->
  <script src ="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--jQuery CDN-->
  <!--Angular CDN with Angular routing CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script src="https://code.angularjs.org/1.3.15/angular-route.js"></script>
  <!--Google Fonts-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Pacifico">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans">
  <!--Font Awesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <!--Stylesheet-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--Javascript-->
  <script src = "script.js"></script>
  <script src="ang_routing.js"></script>
</head>

<!--Angular controller binds data to the scope of the view. -->
<body ng-controller="mainCtrl">
    <div id="display_contents">
<!--The below div holds dynamically loaded content from a template-->
        <div id="view_content" ng-view></div>
    </div>
</body>
</html>
