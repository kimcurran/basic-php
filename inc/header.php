<html>
<head>
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Open+Sans" rel="stylesheet">
  <script src="https://use.fontawesome.com/b632aca4d3.js"></script>
</head>
<body>

  <div class="header">

      <h1 class="branding-title"><a href="/">Personal Media Library</a></h1>

      <ul class="nav">
        <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="catalog.php?cat=books"><i class="fa fa-book" aria-hidden="true"></i>Books</a></li>
        <li class="movies<?php if ($section == "movies") { echo " on"; } ?>"><a href="catalog.php?cat=movies"><i class="fa fa-film" aria-hidden="true"></i>Movies</a></li>
        <li class="music<?php if ($section == "music") { echo " on"; } ?>"><a href="catalog.php?cat=music"><i class="fa fa-headphones" aria-hidden="true"></i>Music</a></li>
        <li class="suggest<?php if ($section == "suggest") { echo " on"; } ?>"><a href="suggest.php"><i class="fa fa-comment-o" aria-hidden="true"></i>Suggest</a></li>
      </ul>

  </div>

  <div id="content">