<?php if (isset($data['id'])): ?> id="<?php echo $data['id'] ?>"<?php endif; ?>
<?php if (isset($data['class'])): ?> class="<?php echo $data['class'] ?>"<?php endif; ?>
<?php if (isset($data['attributes']) && is_array($data['attributes'])): ?>
    <?php foreach ($data['attributes'] as $attrKey => $attrValue) : ?>
        <?php echo ' ' . $attrKey ?>="<?php echo $attrValue?>". ' '
    <?php endforeach ?> 
<?php endif; ?>