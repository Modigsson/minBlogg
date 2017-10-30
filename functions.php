<?php
  declare(strict_types=1);


  include('/data.php');

  function sortByDate($posts, $posts1) {
      return strtotime($posts['date']) <  strtotime($posts1['date']);
     }
     usort($posts, 'sortByDate')
 ?>
