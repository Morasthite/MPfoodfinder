<?php
session_start();
require_once('facebook_info.php');
require_once('libraries/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php');
//create a new facebook object
$fb = new Facebook\Facebook([
    'app_id'                => FACEBOOK_APP_ID,
    'app_secret'            => FACEBOOK_SECRET,
    'default_graph_version' => FACEBOOK_GRAPH_VERSION,
]);

$helper = $fb->getRedirectLoginHelper();
//specify the permissions this app will need, putting them into an array
$permissions = ['email','user_posts'];
//generate the login url
$loginUrl = $helper->getLoginUrl(SERVER_LANDING, $permissions);
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>
<!--craft the a link for the user to log into facebook to grant your app authorization-->
