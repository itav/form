<button <?php if (isset($data['name'])): ?> name="<?php echo $data['name'] ?>" <?php endif; ?> 
        <?php if (isset($data['type'])): ?> type="<?php echo $data['type'] ?>" <?php endif; ?>
        <?php if (isset($data['value'])): ?> value="<?php echo $data['value'] ?>" <?php endif; ?>>
    <?php if (isset($data['label'])): ?> value="<?php echo $data['label'] ?>" <?php endif; ?>
</button>