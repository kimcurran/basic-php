<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $suggestion = $_POST["suggestion"];

  //TODO send email
  header("location:suggest.php?status=thanks");
}

$pageTitle = "Suggest a Media Item";
include("inc/header.php"); ?>

<div class="section page">
  <h1>Suggest a Media Item</h1>
  <form method="post" action="suggest.php" id="suggest-form">
    <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
    	echo "<p>Thanks for the suggestion! We'll check it shortly.</p>";
    } else { ?>
    <label for="name">Name:</label><input type="text" name="name" id="name" />
    <label for="email">Email Address:</label><input type="text" name="email" id="email" />
    <label for="suggestion">Suggestion:</label><textarea name="suggestion" id="suggestion"></textarea>
    <button type="submit">Submit</button>
  </form>
  <?php } ?>
</div>