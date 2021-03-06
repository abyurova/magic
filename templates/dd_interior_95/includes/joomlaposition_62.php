<?php
function joomlaposition_62() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('dd-footer-1') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('dd-footer-1')) : ?>

    <?php if ($isPreview && !$view->containsModules('dd-footer-1')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-62 clearfix" <?php echo buildDataPositionAttr('dd-footer-1'); ?>>
        <?php echo $view->position('dd-footer-1', 'block%joomlaposition_block_62', '62'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('dd-footer-1')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}