  <?php if ($content['left']) { ?>
    <div class="grid-6 alpha panel-col-left <?php if (!$content['right']) { ?>suffix-3 omega<?php } ?>">
      <?php print $content['left']; ?>
    </div>
  <?php } ?>
  
  <?php if ($content['right']) { ?>
  <div id="right" class="<?php if (!$content['left']) { ?>prefix-6 alpha <?php } ?> grid-4 omega panel-col-right">
    <?php print $content['right']; ?>
  </div>
  <?php } ?>