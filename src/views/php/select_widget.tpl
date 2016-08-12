<select <?php echo $view->render('formelement.tpl', ['data' => $data]) ?>
    <?php if ($data['name']): ?> name="<?php echo $data['name'] ?>" <?php endif; ?>>
    <?php foreach ($data['options'] as $option) : ?>
        <?php echo $view->render($option['template'], ['data' => $option]) ?>
    <?php endforeach ?>      
</select>