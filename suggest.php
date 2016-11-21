<?php 
$pageTitle = "Suggest a Media Item";
include("inc/header.php"); ?>

<div class="section page">
  <h1>Suggest a Media Item</h1>
  <form method="post">
    <label for="name">Name:</label><input type="text" name="name" id="name" />
    <label for="email">Email Address:</label><input type="text" name="email" id="email" />
    <label for="suggestion">Suggestion:</label><textarea name="suggestion" id="suggestion"></textarea>
    <button type="submit">Submit</button>
  </form>
</div>