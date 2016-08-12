<option <?php echo $view->render('formelement.tpl', ['data' => $data]) ?>
    <?php if (isset($data['value'])): ?>value="<?php echo $data['value'] ?>"<?php endif; ?>
    <?php if ($data['selected']): ?>selected="selected"<?php endif; ?>>
    <?php echo $data['label'] ?>
</option>