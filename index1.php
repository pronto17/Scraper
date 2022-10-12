<?php
$the_site = "https://www.eesti.ee/et/asutuste-kontaktid/haridusasutused/koolid/harjumaa";
$the_tag = "li"; 
$the_class = "mb-2";

    $html = file_get_contents($the_site);
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $new_array = array();
    foreach ($xpath->query('//'.$the_tag.'[contains(@class,"'.$the_class.'")]/a') as $item) {

        $img_src = "https://www.eesti.ee". $item->getAttribute('href');
       /* print $img_src;
        echo "<br>"; */
        array_push($new_array,$img_src);

    }
   /* echo '<pre>';
    print_r($new_array); 
    echo '</pre>'; */
