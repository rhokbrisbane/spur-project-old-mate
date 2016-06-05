
<?php
require "./vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'gdyppbStQLHK2vQPYQO1SlC6d');
define('CONSUMER_SECRET', 'bjoAfslMF7QyI15alhe8xyhuYXAn7OirU8lg5KQHARJ1JtrIC5');
define('ACCESS_TOKEN', '277452607-hNuv5etzJ2XLlnhtEwGeTS5KAPm8xdnH5EcFm8rY');
define('ACCESS_TOKEN_SECRET', 'g43V4ML1o5fREyQOSgsbE9YppYcRTrxRbtzmXFffVVsMI');

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$query = array(
  "q" => "#oldmate",
  "result_type" => "recent"
);

$results = $toa->get('search/tweets', $query);

$count = 0;
foreach ($results->statuses as $result) {
  if ($count > 7) {
    break;
  }
  echo '<div class="contentGrid"><div class="contentStyle"><p>' . $result->text . '</p><p>' . $result->user->screen_name . '</p></div><div class="triangle"></div></div>';
  $count++;
  // echo "<p>" . $result->user->screen_name . ": " . $result->text . "\n". "</p>";
}
?>
