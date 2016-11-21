<?php

function get_item($id, $item) {
  $result = "<li><img class='catalog-img' src='" 
          . $item["img"] . "' alt='" 
          . $item["title"] . "' />" 
          . "<p>" . $item["title"] 
          . "</p></li>";
  return $result;
}

?>