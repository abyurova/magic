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
<body class=" bootstrap bd-body-1 
 bd-homepage bd-pagebackground bd-margins">
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
	
		<div id="carousel-3" class="bd-slider-3 bd-slider bd-no-margins  carousel slide bd-carousel-fade" >
    

    

    
        
    <div class="bd-sliderindicators-3  bd-slider-indicators" >
    <ol class="bd-indicators-1 animated bd-animation-63 bd-no-margins "  data-animation-name="slideInDown" data-animation-event="slidein" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
        
        <li><a class="
 active" href="#" data-target="#carousel-3" data-slide-to="0"></a></li>
        <li><a class="" href="#" data-target="#carousel-3" data-slide-to="1"></a></li>
        <li><a class="" href="#" data-target="#carousel-3" data-slide-to="2"></a></li>
        <li><a class="" href="#" data-target="#carousel-3" data-slide-to="3"></a></li>
        <li><a class="" href="#" data-target="#carousel-3" data-slide-to="4"></a></li>
    </ol>
    </div>

    <div class="bd-slides carousel-inner">
        <div class=" bd-slide-5 bd-background-width  bd-textureoverlay bd-textureoverlay-9 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <p class=" bd-textblock-37 animated bd-animation-4 animated bd-animation-5 bd-content-element" data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1400ms,1200ms" data-animation-delay="0ms,200ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="" class="bd-linkbutton-7 animated bd-animation-1 animated bd-animation-16  bd-button-12  bd-own-margins bd-content-element"  data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1400ms" data-animation-delay="0ms,300ms" data-animation-infinited="false,false"   >
    Button
</a>
	
		<p class=" bd-textblock-58 animated bd-animation-11 animated bd-animation-15 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
Enter your text here
CUSTOM_CODE;
?>
</p>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-11 bd-background-width  bd-textureoverlay bd-textureoverlay-14 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <p class=" bd-textblock-116 animated bd-animation-70 animated bd-animation-71 bd-content-element" data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1400ms,1200ms" data-animation-delay="0ms,200ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="" class="bd-linkbutton-20 animated bd-animation-68 animated bd-animation-69  bd-button-23  bd-own-margins bd-content-element"  data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1400ms" data-animation-delay="0ms,300ms" data-animation-infinited="false,false"   >
    Button
</a>
	
		<p class=" bd-textblock-115 animated bd-animation-66 animated bd-animation-67 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
Enter your text here
CUSTOM_CODE;
?>
</p>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-12 bd-background-width  bd-textureoverlay bd-textureoverlay-15 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <p class=" bd-textblock-118 animated bd-animation-76 animated bd-animation-77 bd-content-element" data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1400ms,1200ms" data-animation-delay="0ms,200ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="" class="bd-linkbutton-21 animated bd-animation-74 animated bd-animation-75  bd-button-24  bd-own-margins bd-content-element"  data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1400ms" data-animation-delay="0ms,300ms" data-animation-infinited="false,false"   >
    Button
</a>
	
		<p class=" bd-textblock-117 animated bd-animation-72 animated bd-animation-73 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
Enter your text here
CUSTOM_CODE;
?>
</p>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-13 bd-background-width  bd-textureoverlay bd-textureoverlay-16 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <p class=" bd-textblock-120 animated bd-animation-82 animated bd-animation-83 bd-content-element" data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1400ms,1200ms" data-animation-delay="0ms,200ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="" class="bd-linkbutton-22 animated bd-animation-80 animated bd-animation-81  bd-button-26  bd-own-margins bd-content-element"  data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1400ms" data-animation-delay="0ms,300ms" data-animation-infinited="false,false"   >
    Button
</a>
	
		<p class=" bd-textblock-119 animated bd-animation-78 animated bd-animation-79 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
Enter your text here
CUSTOM_CODE;
?>
</p>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-14 bd-background-width  bd-textureoverlay bd-textureoverlay-17 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <p class=" bd-textblock-122 animated bd-animation-88 animated bd-animation-89 bd-content-element" data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1400ms,1200ms" data-animation-delay="0ms,200ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="" class="bd-linkbutton-23 animated bd-animation-86 animated bd-animation-87  bd-button-27  bd-own-margins bd-content-element"  data-animation-name="fadeInDownBig,fadeOutUpBig" data-animation-event="slidein,slideout" data-animation-duration="1000ms,1400ms" data-animation-delay="0ms,300ms" data-animation-infinited="false,false"   >
    Button
</a>
	
		<p class=" bd-textblock-121 animated bd-animation-84 animated bd-animation-85 bd-content-element" data-animation-name="fadeInRightBig,fadeOutRightBig" data-animation-event="slidein,slideout" data-animation-duration="2100ms,1000ms" data-animation-delay="200ms,0ms" data-animation-infinited="false,false">
    <?php
echo <<<'CUSTOM_CODE'
Enter your text here
CUSTOM_CODE;
?>
</p>
        </div>
    </div>
</div>
    </div>

    

    

    
        <div class="bd-left-button">
    <a class=" bd-carousel-6" href="#">
        <span class="bd-icon"></span>
    </a>
</div>

<div class="bd-right-button">
    <a class=" bd-carousel-6" href="#">
        <span class="bd-icon"></span>
    </a>
</div>

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider) {
            initSlider(
                '.bd-slider-3',
                {
                    leftButtonSelector: 'bd-left-button',
                    rightButtonSelector: 'bd-right-button',
                    navigatorSelector: '.bd-carousel-6',
                    indicatorsSelector: '.bd-indicators-1',
                    carouselInterval: 4800,
                    carouselPause: "hover",
                    carouselWrap: true,
                    carouselRideOnStart: true
                }
            );
        }
        /* ]]> */
    </script>
</div>
	
		<div class=" bd-layoutbox-1 bd-page-width  bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class="bd-separator-9 bd-page-width   bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-10 animated bd-animation-3 bd-content-element" data-animation-name="flipInX" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">
    <?php
echo <<<'CUSTOM_CODE'
Oferujemy Państwu usługę projektowania <font color="#9dd700">ŁAZIENEK
</font>
CUSTOM_CODE;
?>
</p>
	
		<a 
 href="#readmore" class="bd-linkbutton-4 animated bd-animation-22  bd-button-28  bd-own-margins bd-content-element"  data-animation-name="fadeInUp" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"   >
    Read more
</a>
	
		<div class="bd-separator-2 bd-page-width   bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
    </div>
</div>
	
		<section class=" bd-section-3 bd-tagstyles bd-custom-image" id="section4" data-section-title="Four Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-3 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-top">
                <div class=" bd-columnwrapper-9 
 col-lg-3
 col-sm-6">
    <div class="bd-layoutcolumn-9 animated bd-animation-6 bd-column"  data-animation-name="bounce" data-animation-event="hover" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><a class="bd-imagelink-1  bd-own-margins "  href="#idea">
<img class=" bd-imagestyles" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/d1e8c9b0035fa44f34dfdf06871fc6ad_f001.jpg">
</a>
	
		<h3 class=" bd-textblock-1 bd-content-element">
    1. Idea
</h3>
	
		<p class=" bd-textblock-2 bd-content-element">
    Marsh mallow muffin soufflé jelly-o tart cake. Marshmallow macaroon jelly jubes dont dragée ice cream.
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-18 
 col-lg-3
 col-sm-6">
    <div class="bd-layoutcolumn-18 animated bd-animation-7 bd-column"  data-animation-name="bounce" data-animation-event="hover" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><a class="bd-imagelink-2  bd-own-margins "  href="#planowanie">
<img class=" bd-imagestyles" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/ef4758fef2f84f0b3b929a7b133d1cb6_f003.jpg">
</a>
	
		<h3 class=" bd-textblock-3 bd-content-element">
    2. Planowanie
</h3>
	
		<p class=" bd-textblock-4 bd-content-element">
    Marsh mallow muffin soufflé jelly-o tart cake. Marshmallow macaroon jelly jubes dont dragée ice cream.
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-20 
 col-lg-3
 col-sm-6">
    <div class="bd-layoutcolumn-20 animated bd-animation-8 bd-column"  data-animation-name="bounce" data-animation-event="hover" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><a class="bd-imagelink-3  bd-own-margins "  href="#tworzenie">
<img class=" bd-imagestyles" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/223133d3001201fe4f293a2a8fd38eaa_f002.jpg">
</a>
	
		<h3 class=" bd-textblock-5 bd-content-element">
    3. Tworzenie
</h3>
	
		<p class=" bd-textblock-6 bd-content-element">
    Marsh mallow muffin soufflé jelly-o tart cake. Marshmallow macaroon jelly jubes dont dragée ice cream.
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-22 
 col-lg-3
 col-sm-6">
    <div class="bd-layoutcolumn-22 animated bd-animation-9 bd-column"  data-animation-name="bounce" data-animation-event="hover" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><a class="bd-imagelink-4  bd-own-margins "  href="#sukces">
<img class=" bd-imagestyles" src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/8a204b9b049a2af98e42382edee700b6_f004.jpg">
</a>
	
		<h3 class=" bd-textblock-7 bd-content-element">
    4. Sukces
</h3>
	
		<p class=" bd-textblock-9 bd-content-element">
    Marsh mallow muffin soufflé jelly-o tart cake. Marshmallow macaroon jelly jubes dont dragée ice cream.
</p></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-21 bd-tagstyles" id="section4" data-section-title="Business Image Right To Text">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-16 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-middle">
                <div class=" bd-columnwrapper-29 
 col-md-6">
    <div class="bd-layoutcolumn-29 animated bd-animation-20 bd-column"  data-animation-name="slideInLeft" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><h1 class=" bd-textblock-11 bd-no-margins bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
About Us
CUSTOM_CODE;
?>
</h1>
	
		<div class="bd-separator-3  bd-separator-left bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<div class=" bd-spacer-2 clearfix"></div>
	
		<p class=" bd-textblock-14 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart. Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work.<br><br>I believe in being strong when everything seems to be going wrong. I believe that happy girls are the prettiest girls. I believe that tomorrow is another day and I believe in miracles.
CUSTOM_CODE;
?>
</p>
	
		<div class=" bd-spacer-5 clearfix"></div>
	
		<a 
 href="" class="bd-linkbutton-6  bd-button-13  bd-own-margins bd-content-element"    >
    Read More
</a>
	
		<a 
 href="" class="bd-linkbutton-12  bd-button-29  bd-own-margins bd-content-element"    >
    Buy Now
</a>
	
		<div class=" bd-spacer-7 clearfix"></div></div></div>
</div>
	
		<div class=" bd-columnwrapper-31 
 col-md-6">
    <div class="bd-layoutcolumn-31 animated bd-animation-21 bd-column"  data-animation-name="slideInRight" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false"><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-10 bd-imagescaling bd-imagescaling-2 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/9481cf513066233bb9252971f1d12038_B_C2_M08ready.png"></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<div class="bd-containereffect-2 container-effect container ">
<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9">
<div class="bd-contentlayout-9   bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-27 bd-flex-wide bd-no-margins">
    <div class=" bd-content-9">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('common');
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
</div>
	
		<section class=" bd-section-8 bd-tagstyles animated bd-animation-12" data-animation-name="fadeInUpBig" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false" id="section4" data-section-title="Four Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-32 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-top">
                <div class=" bd-columnwrapper-77 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-77 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-18 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/f38c1bb3e8fe32981e2a6cf89c058b3a_wsed7.png">
	
		<h2 class=" bd-textblock-60 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
24
CUSTOM_CODE;
?>
</h2>
	
		<p class=" bd-textblock-62 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
years
CUSTOM_CODE;
?>
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-79 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-79 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-21 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/1ef9d15fc3e4d5bc001209a003f2dca7_d90.png">
	
		<h2 class=" bd-textblock-64 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
1234
CUSTOM_CODE;
?>
</h2>
	
		<p class=" bd-textblock-66 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
Projects
CUSTOM_CODE;
?>
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-81 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-81 bd-column" ><div class="bd-vertical-align-wrapper"><span class="bd-iconlink-2 bd-own-margins bd-icon-63 bd-icon "></span>
	
		<img class="bd-imagelink-24 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/911d7bb5b5087feb3d3f35797cf71ec3_tyh.png">
	
		<h2 class=" bd-textblock-68 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
834
CUSTOM_CODE;
?>
</h2>
	
		<p class=" bd-textblock-70 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
awards
CUSTOM_CODE;
?>
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-83 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-83 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-26 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/50c6210975268eb227b6db5392c6752f_1469465031_39.Heart.png">
	
		<h2 class=" bd-textblock-72 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
45825
CUSTOM_CODE;
?>
</h2>
	
		<p class=" bd-textblock-74 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
Clients
CUSTOM_CODE;
?>
</p></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
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