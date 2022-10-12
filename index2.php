<?php
error_reporting(0);
require_once('index1.php');

function cfDecodeEmail($encodedString){
    $k = hexdec(substr($encodedString,0,2));
    for($i=2,$email='';$i<strlen($encodedString)-1;$i+=2){
      $email.=chr(hexdec(substr($encodedString,$i,2))^$k);
    }
    return $email;
  }

foreach ($new_array as $value){
    $new_array = array_map('strval', $new_array);
$the_site = $value;
$the_tag = "dd"; 
$the_class = "col-xl-10 col-lg-10 col-md-9 col-sm-6 col-10";

    $html = file_get_contents($the_site);
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    foreach ($xpath->query('//'.$the_tag.'[contains(@class,"'.$the_class.'")]/a') as $item) {

        $img_src = $item->getAttribute('href');

        list($user, $pass) = explode("#", $img_src);
        $result = $pass;
        
          echo cfDecodeEmail($result); // usage
    }
    echo "<br>";
}

