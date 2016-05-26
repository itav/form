<optgroup <?php echo $view->render('formelement.php', ['data' => $data]) ?>label="<?php echo $data['label'] ?>" <?php if ($data['disabled']): ?> disabled="<?php echo $data['disabled'] ?>" <?php endif ?>> 
<?php foreach ($data['options'] as $option) : ?>
    <?php echo $view->render($option['template'], ['data' => $option]) ?>
    
<?php endforeach ?>
</optgroup>
