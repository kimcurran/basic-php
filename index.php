<?php 
$pageTitle = "Personal Media Library";
include("inc/header.php");
include("inc/data.php");
include("inc/functions.php"); ?>

    <div class="section catalog">

    <div class="wrapper">

      <h2>May we suggest something?</h2>

      <ul class="items">
      	<?php
      	  $random = array_rand($catalog, 4);
          foreach ($random as $id) {
          	echo get_item($id, $catalog[$id]);
          }
      	?>
      </ul>

    </div>

    </div>
  </div>

<?php include("inc/footer.php"); ?>