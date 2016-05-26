<option <?php echo $view->render('formelement.php', ['data' => $data]) ?>
    <?php if (isset($data['value'])): ?>value="<?php echo $data['value'] ?>"<?php endif; ?>
    <?php if ($data['selected']): ?>selected="selected"<?php endif; ?>>
    <?php echo $data['label'] ?>
</option>