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
  $result = array();

  foreach ($catalog as $id => $item) {
  	if ($category == null OR $category == $item["category"]) {
  	  $sort = $item["title"];
  	  $sort = ltrim($sort, "The ");
  	  $sort = ltrim($sort, "A ");
  	  $sort = ltrim($sort, "An ");
  	  $result[$id] = $sort;
  	}
  }

  asort($result);
  return array_keys($result);
}

?>