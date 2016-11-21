<?php

function get_item($id, $item) {
  $result = "<li><img class='catalog-img' src='" 
          . $item["img"] . "' alt='" 
          . $item["title"] . "' />" 
          . "<p>" . $item["title"] 
          . "</p></li>";
  return $result;
}

function get_category($catalog, $category) {
  if ($category == null) {
  	return array_keys($catalog);
  }
  $result = array();
  foreach ($catalog as $id => $item) {
  	if ($category == $item["category"]) {
  	  $result[] = $id;
  	}
  }
  return $result;
}

?>