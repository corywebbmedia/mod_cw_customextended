<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Note: If you want to add attributes, you can get those attributes with
 *  the following code:
 *
 *  $attribute = $helper->getAttribute('attribute_key', 'Default value');
 *
 * Replace 'attribute_key' with the actual key, and 'Default value' with
 *  a default value you would like to use if no attribute with that key
 *  is available.
 */

?>
<div class="cw-customextended custom<?php echo $moduleclass_sfx; ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif; ?> >
    <?php echo $text; ?>

    <?php if ($params->get('displayimage1', '') || $params->get('displayimage2', '') || $params->get('displayimage3', '')) : ?>
    <div class="display-images">
        <?php for($i=1; $i<=3; $i++) :?>
            <?php if ($params->get('displayimage' . $i, '')) : ?>
                <div class="display-image-<?php echo $i; ?>">
                    <img src="<?php echo $params->get('displayimage' . $i); ?>" alt="" />
                </div><!-- /.display-image-<?php echo $i; ?> -->
            <?php endif; ?>
        <?php endfor; ?>
    </div><!-- /.display-images -->
    <?php endif; ?>
</div><!-- /.cw-customextended -->
