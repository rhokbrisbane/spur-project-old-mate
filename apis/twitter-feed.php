
<?php
require "./vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'bZBePzKUIAgUD67Q5S1XyAt8d');
define('CONSUMER_SECRET', 'eIEhPq4BGay9P335fcPpMm8cPezGxnV7qr65E6z9PigqzYb6hH');
define('ACCESS_TOKEN', '2903074441-gk3jRwnbCsyGCQ1N0w0wFXSZGT6h5efduPNFZoK');
define('ACCESS_TOKEN_SECRET', 'MQpn5ObworbuYy4SnpHrw1FhD894Z8KwHovCdOqtyCR4g');

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$query = array(
  "q" => "#oldmate",
  "result_type" => "recent"
);

$results = $toa->get('search/tweets', $query);

$count = 0;
foreach ($results->statuses as $result) {
  if ($count > 9) {
    break;
  }
  echo '<div class="contentGrid"><div class="contentStyle"><p>' . $result->text . '</p><p>' . $result->user->screen_name . '</p></div></div>';
  $count++;
  // echo "<p>" . $result->user->screen_name . ": " . $result->text . "\n". "</p>";
}
?>
