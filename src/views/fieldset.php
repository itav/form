<fieldset> 
    <?php foreach ($data['elements'] as $element) : ?>
        <?php echo $view->render($element['template'], ['data' => $element]) ?>
    <?php endforeach ?>
</fieldset>
