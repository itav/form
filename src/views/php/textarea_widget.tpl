<textarea <?php echo $view->render('formelement.tpl', ['data' => $data]) ?>
        <?php if (isset($data['name'])): ?> name="<?php echo $data['name'] ?>" <?php endif; ?> 
        <?php if (isset($data['type'])): ?> type="<?php echo $data['type'] ?>" <?php endif; ?>
        <?php if (isset($data['value'])): ?> value="<?php echo $data['value'] ?>" <?php endif; ?>><?php if (isset($data['value'])): ?><?php echo $data['value'] ?><?php endif; ?></textarea>