<!DOCTYPE html>
<html>
<body>

<?php

require_once('TweetPHP.php');

$TweetPHP = new TweetPHP(array(
  'consumer_key'              => '7w6OaRJxhPxrI2p7rzf1p0Mrg',
  'consumer_secret'           => 'DkHGne75zwzKcCIFizyUDwXP8Wh80Edt89EiPSyQvK9NUG2ier',
  'access_token'              => '3798603134-o0GGkIiOXEHJA0dahATd0rUWs6XbZqVz1RfXNKc',
  'access_token_secret'       => 'IhYM3zUaCEdAZsT11EllkJ0ARiTmifJIU7kuTkxaMiwHU',
  'twitter_screen_name'       => 'darthvader'
));

echo $TweetPHP->get_tweet_list();

?>



</body>
</html>