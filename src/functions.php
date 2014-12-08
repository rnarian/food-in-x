<?php

  function get_venues($all=false){
    $venues = require(__DIR__ . '/../data/venues.php');
    if(!$all) {
      foreach($_GET as $key => $value){
        if(!empty($value)){
          foreach($venues as $vKey => $vValue){
            if($vValue[$key] != $value){
              unset($venues[$vKey]);
            }
          }
        }
      }
    }
    usort($venues, function($a, $b){
      return strcmp($a['name'], $b['name']);
    });

    return $venues;
  }

  function get_option($type) {
    $venues = require(__DIR__ . '/../data/venues.php');
    $options = array();
    foreach($venues as $key => $value){
      $options[] = $value[$type];
    }
    $options = array_unique($options);
    return $options;
  }

  function slugify($text){
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text)){
      return md5($text);
    }

    return $text;
  }

?>
