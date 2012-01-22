<?php

  $front_matter = array(
    'title' => 'YAWL &amp; Others!'
  );
  
  $content = function () {
    global $raft;

    ?>
      <?php foreach ($raft['site.posts'] as $post) { ?>
        <p>
          <?= strftime('%Y %b %d', $post['date']) ?>
          <a href="<?= $post['permalink'] ?>"><?= $post['title'] ?></a>
        </p>
      <?php } ?>
    <?php
    
  }
?>