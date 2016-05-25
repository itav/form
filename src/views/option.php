<option <?php if (isset($option['value'])): ?>value="<?php echo $option['value'] ?>"<?php endif; ?> <?php if ($option['selected']): ?>selected="selected"<?php endif; ?>>
    <?php echo $option['label'] ?>
</option>