<?php

  # About:      A php thing to list nice places for grabbing food.
  # Author:     Jan Oelze <jan@codein.is>
  # Date:       18. November 2013

  session_start();

  require_once 'data/venues.php';
  require_once 'src/functions.php';

  $config = array(
    'site_title' => 'We go Restaurant', # You should rename this to match your city.
    'author_link' => '<a target="_blank" href="http://twitter.com/ffffancy">@ffffancy</a>', # This is displayed in the header.
    'base_url' => 'http://food.dev', # Point this URL to your food-in-x site. No trailing slash please.
    'footer_text' => 'Some places I like to eat at. Hope you like it.', # The text, that is displayed in the footer.
    'theme' => 'default',
    'max_dollar_signs' => 5
  );

  include 'theme/' . $config['theme'] . '/main.php';

?>
