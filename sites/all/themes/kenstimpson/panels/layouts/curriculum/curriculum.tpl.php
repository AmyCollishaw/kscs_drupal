<?php
/**
 * @file
 * Template for the Omega Grid 3 layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="curriculum_container">
<div<?php print $attributes ?>>
  <?php foreach($content as $name => $item): ?>
    <?php if (!empty($item)): ?>
      <div class="<?php print $name;?>">
        <?php print $item ?>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
</div>