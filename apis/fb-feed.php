<?php
require "../vendor/autoload.php";

$fb = new Facebook\Facebook([
  'app_id' => '{sad}',
  'app_secret' => '{sad}',
  'default_graph_version' => 'v2.6',
  'default_access_token' => '{asdb}', // optional

]);
try {
  // Get the Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me'); //, '{access-token}');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();
 ?>
