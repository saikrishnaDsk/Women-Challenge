<?php

$html = file_get_contents($_REQUEST['https://github.com/']);

preg_match_all('/<div class="swrapper">(.*?)<\/div>/s', $html, $matches);
   // specify the class to get the data of that class
foreach ($matches[1] as $node) {
    echo $node."<br><br><br>";
}


?>