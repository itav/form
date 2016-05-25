<?php if ($data['name'] && $data['label']): ?>
    <label for="<?php echo $data['name'] ?>"><?php echo $data['label'] ?></label>
<?php endif; ?>
<select <?php if ($data['name']): ?> name="<?php echo $data['name'] ?>" <?php endif; ?>>
    <?php foreach ($data['options'] as $option) : ?>
        <?php echo $view->render($option['template'], ['data' => $option]) ?>
    <?php endforeach ?>      
</select>