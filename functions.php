<?php

  require __DIR__.'/data.php';

  function sortByDate(array $posts, array $posts1) {
      return strtotime($posts['date']) <  strtotime($posts1['date']);
     }
     usort($posts, 'sortByDate');
