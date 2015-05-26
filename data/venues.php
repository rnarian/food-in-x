<?php

  # This is where you put your reviews.
  # You can plugin whatever data source you want to use.
  # Important is, that you return an array with your reviews.

  return array(
    array(
      'name' => 'Veggie Bros',
      'description' => 'Just check out their falasophie.',
      'address' => 'Juliuspromenade 38, 97070 Würzburg',
      'price' => 3, # The number of dollar signs
      'best_for' => 'Lunch', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://www.veggiebros.de/', # An external URL
      'type' => 'Veggie', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
    array(
      'name' => 'Osteria Trio',
      'description' => 'Pizza as large as the table.',
      'address' => 'Spitalgasse 1, 97082 Würzburg',
      'price' => 3,
      'best_for' => 'Dinner',
      'url' => 'http://www.yelp.de/biz/osteria-trio-w%C3%BCrzburg',
      'type' => 'Italian',
    ),
    array(
      'name' => 'Bratwurststand Knüpfing',
      'description' => 'Best worscht in Town.',
      'address' => 'Marktplatz, 97070 Würzburg',
      'price' => 1,
      'best_for' => 'Fast-Food',
      'url' => 'http://www.yelp.de/biz/bratwurststand-kn%C3%BCpfing-w%C3%BCrzburg?osq=Fast+Food+%26+Imbiss',
      'type' => 'German',
    ),
    array(
      'name' => 'Burger & Bier',
      'description' => 'Burger, Fries and (Craft) Bier.',
      'address' => 'Bronnbacher Gasse 43, 97070 Würzburg',
      'price' => 3,
      'best_for' => 'Fast-Food',
      'url' => 'http://www.burger-n-bier.de',
      'type' => 'American',
    ),
    array(
      'name' => 'Habaneros',
      'description' => 'Fast-Food & Diner',
      'address' => 'Theaterstraße 1, 97070 Würzburg',
      'price' => 3,
      'best_for' => 'Fast-Food',
      'url' => 'http://www.habaneros.de/',
      'type' => 'Tex-Mex',
    ),
    array(
      'name' => 'Casa del Gusto',
      'description' => '',
      'address' => 'Herzogenstraße 9, 97070 Würzburg',
      'price' => 3,
      'best_for' => 'Lunch',
      'url' => 'http://www.casadelgusto.de/',
      'type' => 'Italian',
    ),
  );

?>
