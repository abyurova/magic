<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8" />
    <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
        }
    ?>
    <link href="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/e7a18fdbf1d3c23d66bd08a6379875b1_f5669573ecedc4f35398b17f15911b23_favicon.ico" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<!--[if lte IE 9]>
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.css'); ?>" media="screen"/>
<![endif]-->
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.core.js') ?>"></script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/CloudZoom.js'); ?>" type="text/javascript"></script>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if(('edit' == JRequest::getVar('layout') && 'form' == JRequest::getVar('view')) ||
        ('com_config' == JRequest::getVar('option') && 'config.display.modules' == JRequest::getVar('controller'))) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/media.css'); ?>" media="screen" />
    <script src="<?php echo addThemeVersion($document->templateUrl . '/js/template.js'); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    
</head>
<body class=" bootstrap bd-body-6  bd-pagebackground bd-margins">
    <header class=" bd-headerarea-1  bd-margins">
        <section class=" bd-section-1 bd-page-width bd-tagstyles " id="section7" data-section-title="Logo With Contacts">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-35 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-37 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/65090ff82c6e0165e2d9f550294b1017_logointerior.png"
<?php

$logoSrc = ob_get_clean();
$logoLink = '';

if ($themeParams->get('logoFile'))
    $logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';

if ($themeParams->get('logoLink'))
    $logoLink = $themeParams->get('logoLink');

if (!$logoLink)
    $logoLink = JUri::base(true);

?>
<a class=" bd-logo-3" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-6 animated bd-animation-2" data-animation-name="pulse" data-animation-event="onload" data-animation-duration="600ms" data-animation-delay="0ms" data-animation-infinited="false" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a>
    </div>
</div>
	
		<div class=" bd-layoutbox-39 animated bd-animation-14 bd-no-margins clearfix" data-animation-name="slideInDown" data-animation-event="onload" data-animation-duration="1500ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <span class="bd-iconlink-13 bd-own-margins bd-icon-93 bd-icon "></span>
	
		<p class=" bd-textblock-124 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
4934 Irving Place,<br>Pond, MO 63040
CUSTOM_CODE;
?>
</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-41 animated bd-animation-10 bd-no-margins clearfix" data-animation-name="slideInDown" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <div class="bd-container-inner">
        <span class="bd-iconlink-15 bd-own-margins bd-icon-95 bd-icon "></span>
	
		<p class=" bd-textblock-126 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
+1 (555) 456 3890<br><a href="mailto:info@company.com?template=dd_interior_95&amp;is_preview=on" draggable="false">
info@company.com
</a>
CUSTOM_CODE;
?>
</p>
    </div>
</div>
    </div>
</div>
    </div>
</section>
	
		<?php
    renderTemplateFromIncludes('hmenu_1', array());
?>
</header>
	
		<div class=" bd-stretchtobottom-3 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-6">
<div class="bd-contentlayout-6  bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-23 bd-flex-wide bd-no-margins">
    <div class=" bd-content-6">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('blog_3');
    echo '<jdoc:include type="component" />';
    ?>
</div>
</div>

                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
	
		
	
		<footer class=" bd-footerarea-1 bd-margins">
        <div class=" bd-layoutcontainer-51 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-147 
 col-sm-12">
    <div class="bd-layoutcolumn-147 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_75');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<section class=" bd-section-4 bd-tagstyles" id="section4" data-section-title="Contact Us Three Columns With Header">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-36 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-top">
                <div class=" bd-columnwrapper-93 
 col-xs-12">
    <div class="bd-layoutcolumn-93 bd-column" ><div class="bd-vertical-align-wrapper"><h1 class=" bd-textblock-49 animated bd-animation-13 bd-content-element" data-animation-name="bounceIn" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <?php
echo <<<'CUSTOM_CODE'
Get in Touch with Us
CUSTOM_CODE;
?>
</h1>
	
		<div class="bd-separator-7  bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-95 
 col-lg-4
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-95 animated bd-animation-17 bd-column"  data-animation-name="slideInLeft" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><h3 class=" bd-textblock-51 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
Our Mission
CUSTOM_CODE;
?>
</h3>
	
		<p class=" bd-textblock-94 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
In this day and time, digital web design cannot be overlooked. There is so much that you stand to gain from a digital website, including a responsive site through creative web development, brand identity and a high performing site that is bound to bring you only good results.&nbsp;<br>
CUSTOM_CODE;
?>
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-97 
 col-lg-4
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-97 animated bd-animation-18 bd-column"  data-animation-name="slideInUp" data-animation-event="scroll" data-animation-duration="1400ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><h3 class=" bd-textblock-96 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
Visit Our Office
CUSTOM_CODE;
?>
</h3>
	
		<div class=" bd-layoutbox-28 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <span class="bd-iconlink-5 bd-own-margins bd-icon-72 bd-icon "></span>
	
		<p class=" bd-textblock-98 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
+1 (555) 456 3890<br>+1 (555) 564 9354
CUSTOM_CODE;
?>
</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-30 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <span class="bd-iconlink-7 bd-own-margins bd-icon-74 bd-icon "></span>
	
		<p class=" bd-textblock-100 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
4934 Irving Place,<br>
Pond, MO 63040
CUSTOM_CODE;
?>
</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-32 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <span class="bd-iconlink-9 bd-own-margins bd-icon-76 bd-icon "></span>
	
		<p class=" bd-textblock-102 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
<a href="mailto:support@company.com?template=dd_interior_95&amp;is_preview=on">
    
support@company.com</a>
<br><a href="mailto:info@company.com?template=dd_interior_95&amp;is_preview=on">
info@company.com
</a>
CUSTOM_CODE;
?>
</p>
    </div>
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-99 
 col-lg-4
 col-md-4
 col-sm-12">
    <div class="bd-layoutcolumn-99 animated bd-animation-19 bd-column"  data-animation-name="slideInRight" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><div class="bd-googlemap-6 bd-own-margins bd-imagestyles-18 ">
    <div class="embed-responsive" style="height: 100%; width: 100%;">
        <iframe class="embed-responsive-item"
                src="//maps.google.com/maps?output=embed&q=kraków os nastoku 27a&z=12&t=m"></iframe>
    </div>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-17 bd-tagstyles" id="section17" data-section-title="2 Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-11 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-24 
 col-sm-12">
    <div class="bd-layoutcolumn-24 bd-column" ><div class="bd-vertical-align-wrapper"><div class=" bd-layoutbox-4 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
    renderTemplateFromIncludes('joomlaposition_18');
?>
    </div>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<div class=" bd-pagefooter-3">
    <div class="bd-container-inner">
        
            Designed by <a href='http://diablodesign.eu' target="_blank">DiabloDesign</a>.
    </div>
</div>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-66 bd-icon "></span>
</a></div>
</body>
</html>