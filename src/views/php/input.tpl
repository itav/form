<?php if (isset($data['name']) && isset($data['label'])): ?>
    <label for="<?php echo $data['name'] ?>"><?php echo $data['label'] ?></label>
<?php endif; ?>
<input <?php echo $view->render('formelement.php', ['data' => $data]) ?> 
    <?php if (isset($data['name'])): ?> name="<?php echo $data['name'] ?>" <?php endif; ?> 
    <?php if (isset($data['type'])): ?> type="<?php echo $data['type'] ?>" <?php endif; ?>
    <?php if (isset($data['value'])): ?> value="<?php echo $data['value'] ?>" <?php endif; ?>>
