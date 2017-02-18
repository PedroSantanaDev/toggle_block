<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php  echo $form->label('title', t("Ttile")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('title', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('title'), $title, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php 
    if (isset($image) && $image > 0) {
        $image_o = File::getByID($image);
        if (!is_object($image_o)) {
            unset($image_o);
        }
    } ?>
    <?php  echo $form->label('image', t("Image")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('image', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make("helper/concrete/asset_library")->image('ccm-b-toggle_block-image-' . $identifier_getString, $view->field('image'), t("Choose Image"), $image_o); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('content', t("Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('content', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('content'), $content); ?>
</div>
<div class="form-group">
    <?php  echo $form->label('blockStyle', t("Block Style")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('blockStyle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->select($view->field('blockStyle'), $blockStyle_options, $blockStyle, array()); ?>
</div>