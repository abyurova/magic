<?php
/**
* @version   $Id: index.php 15529 2013-11-13 22:04:39Z kevin $
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// load and inititialize gantry class
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));

?>
<!doctype html>
<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
<head>
	<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
	<meta name="viewport" content="width=960px, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
	<meta name="viewport" content="width=1200px, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php else : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php endif; ?>
<?php if ($gantry->browser->name == 'ie') : ?>
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<?php endif; ?>	
    <?php
        $gantry->displayHead();
		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
        if ($gantry->browser->name == 'ie'){
        	if ($gantry->browser->shortversion == 9){
        		$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
        	}
			if ($gantry->browser->shortversion == 8){
				$gantry->addScript('html5shim.js');
			}
		}
		if ($gantry->get('layout-mode', 'responsive') == 'responsive') $gantry->addScript('rokmediaqueries.js');
		if ($gantry->get('loadtransition')) {
		$gantry->addScript('load-transition.js');
		$hidden = ' class="rt-hidden"';}

    ?>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo JURI::base().'templates/'.$this->template ?>/css/font-awesome.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
<?php require_once(dirname(__FILE__) . '/theme.php');	
$app = JFactory::getApplication();
$templateName = $app->getTemplate();
?>

<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName; ?>/less/jevents.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName; ?>/less/kunena.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName; ?>/less/virtuemart.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName; ?>/less/animate.css">
<link rel="stylesheet/less" type="text/css" href="templates/<?php echo $templateName; ?>/less/hikashop.less" />
<script src="templates/<?php echo $templateName; ?>/js/less.js" type="text/javascript"></script>
<script src="templates/<?php echo $templateName; ?>/js/wow.min.js" type="text/javascript"></script>
<script>
	new WOW().init();
</script>
</head>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


jQuery(document).ready(function(){
	jQuery('#n2-ss-1item4').click(function(e){
		e.preventDefault();
		jQuery('html, body').animate({
		scrollTop: jQuery("#rt-showcase").offset().top
		}, 1000);
	})
	jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 60) {
        jQuery("#rt-top-surround").addClass("scroll");
    }
	if (scroll <= 60) {
        jQuery("#rt-top-surround").removeClass("scroll");
    }
	})
	var myScrollPos = 0;
	jQuery(window).scroll(function () {
	    var myCurScrollPos = jQuery(this).scrollTop();
	    if (myCurScrollPos > myScrollPos) {
	        //Scrolling Down
		//	jQuery("#rt-top-surround").removeClass("scroll fadeInDown animated");
	    } else {
	       //Scrolling Up
		 //   jQuery("#rt-top-surround").addClass("scroll fadeInDown animated");
	    }
	    myScrollPos = myCurScrollPos;
	});
})

</script>

<script type="text/javascript">
jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 150) {
        jQuery("#rt-top-surround").addClass("scroll-down fadeInDown animated", 1000);
		jQuery("#rt-top-surround").removeClass("scroll-down fadeInDown animated", 1000);
    }
});
</script>

<script>
	jQuery('#nav_up').click(
		function (e) {
			jQuery('html, body').animate({scrollTop: '0px'}, 50);
		}
	);
	jQuery("#rt-scroll").hide();
	jQuery("#rt-scroll").click(function () {
		jQuery("body, html").animate({scrollTop: 0}, 50);
		return false;
	});
	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop() > 0){
			jQuery("#rt-scroll").fadeIn('fast');
		}else{
			if(jQuery("#rt-scroll").is(':visible')){
				jQuery("#rt-scroll").fadeOut('fast');
			}
		}
	});
</script>

<body <?php echo $gantry->displayBodyTag(); ?>>
    <?php /** Begin Top Surround **/ if ($gantry->countModules('top') or $gantry->countModules('header')) : ?>
    <header id="rt-top-surround">

		<?php /** Begin Top **/ if ($gantry->countModules('top')) : ?>
		<?php
		if($topbg!= 'transparent') { ?>
			<div id="rt-top" style="background:<?php echo $topbg;?> no-repeat center top; background-size:cover;">
			<?php } else{ ?>
			<div id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top'); ?>>	
		<?php } ?>
			<div class="rt-container">
				<?php echo $gantry->displayModules('top','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Top **/ endif; ?>

		<?php /** Begin header **/ if ($gantry->countModules('header')) : ?>
		<?php
		if($headerbg!= 'transparent') { ?>
			<div id="rt-header" style="background:<?php echo $headerbg;?> no-repeat center top; background-size:cover;">
			<?php } else{ ?>
			<div id="rt-header" <?php echo $gantry->displayClassesByTag('rt-header'); ?>>	
		<?php } ?>
			<div class="rt-container">
				<?php echo $gantry->displayModules('header','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End header **/ endif; ?>
		
	</header>
	<?php /** End Top Surround **/ endif; ?>

	<?php /** Begin slider **/ if ($gantry->countModules('slider')) : ?>
	<?php
	if($sliderbg!= 'transparent') { ?>
		<div id="rt-slider" style="background:<?php echo $sliderbg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-slider" <?php echo $gantry->displayClassesByTag('rt-slider'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('slider','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End slider **/ endif; ?>

	<?php /** Begin drawer **/ if ($gantry->countModules('drawer')) : ?>
	<?php
	if($drawerbg!= 'transparent') { ?>
		<div id="rt-drawer" style="background:<?php echo $drawerbg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-drawer" <?php echo $gantry->displayClassesByTag('rt-drawer'); ?>>	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('drawer','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End drawer **/ endif; ?>

	<?php /** Begin showcase **/ if ($gantry->countModules('showcase')) : ?>
	<?php
	if($showcasebg!= 'transparent') { ?>
		<div id="rt-showcase" style="background:<?php echo $showcasebg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-showcase" <?php echo $gantry->displayClassesByTag('rt-showcase'); ?>>	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('showcase','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End showcase **/ endif; ?>

	<div id="rt-transition"<?php if ($gantry->get('loadtransition')) echo $hidden; ?>>
		<div id="rt-mainbody-surround">
		
			<?php /** Begin feature **/ if ($gantry->countModules('feature')) : ?>
			<?php
			if($featurebg!= 'transparent') { ?>
				<div id="rt-feature" style="background:<?php echo $featurebg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-feature" <?php echo $gantry->displayClassesByTag('rt-feature'); ?>>	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('feature','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End feature **/ endif; ?>

			<?php /** Begin utility **/ if ($gantry->countModules('utility')) : ?>
			<?php
			if($utilitybg!= 'transparent') { ?>
				<div id="rt-utility" style="background:<?php echo $utilitybg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-utility" <?php echo $gantry->displayClassesByTag('rt-utility'); ?>>	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('utility','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End utility **/ endif; ?>

			<?php /** Begin breadcrumbs **/ if ($gantry->countModules('breadcrumbs')) : ?>
			<?php
			if($breadcrumbbg!= 'transparent') { ?>
				<div id="rt-breadcrumbs" style="background:<?php echo $breadcrumbbg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-breadcrumbs" <?php echo $gantry->displayClassesByTag('rt-breadcrumbs'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('breadcrumbs','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End breadcrumbs **/ endif; ?>

			<?php /** Begin position-1 **/ if ($gantry->countModules('position-1')) : ?>
			<?php
			if($position1bg!= 'transparent') { ?>
				<div id="rt-position-1" style="background:<?php echo $position1bg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-position-1" <?php echo $gantry->displayClassesByTag('rt-position-1'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('position-1','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End position-1 **/ endif; ?>

			<?php /** Begin maintop **/ if ($gantry->countModules('maintop')) : ?>
			<?php
			if($maintopbg!= 'transparent') { ?>
				<div id="rt-maintop" style="background:<?php echo $maintopbg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-maintop" <?php echo $gantry->displayClassesByTag('rt-maintop'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('maintop','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End maintop **/ endif; ?>

			<?php /** Begin position-2 **/ if ($gantry->countModules('position-2')) : ?>
			<?php
			if($position2bg!= 'transparent') { ?>
				<div id="rt-position-2" style="background:<?php echo $position2bg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-position-2" <?php echo $gantry->displayClassesByTag('rt-position-2'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('position-2','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End position-2 **/ endif; ?>

			<?php /** Begin fullwidth **/ if ($gantry->countModules('fullwidth')) : ?>
			<?php
			if($fullwidthbg!= 'transparent') { ?>
				<div id="rt-fullwidth" style="background:<?php echo $fullwidthbg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-fullwidth" <?php echo $gantry->displayClassesByTag('rt-fullwidth'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('fullwidth','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End fullwidth **/ endif; ?>

			<?php /** Begin Main Body **/ ?>
			<div id="article-section">
				<div class="rt-container">
					<?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard'); ?>
				</div>
		    </div>
			<?php /** End Main Body **/ ?>

			<?php /** Begin mainbottom **/ if ($gantry->countModules('mainbottom')) : ?>
			<?php
			if($mainbottombg!= 'transparent') { ?>
				<div id="rt-mainbottom" style="background:<?php echo $mainbottombg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-mainbottom" <?php echo $gantry->displayClassesByTag('rt-mainbottom'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End mainbottom **/ endif; ?>

			<?php /** Begin videoslider **/ if ($gantry->countModules('videoslider')) : ?>
			<?php
			if($videosliderbg!= 'transparent') { ?>
				<div id="rt-videoslider" style="background:<?php echo $videosliderbg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-videoslider" <?php echo $gantry->displayClassesByTag('rt-videoslider'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('videoslider','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End videoslider **/ endif; ?>

			<?php /** Begin extension **/ if ($gantry->countModules('extension')) : ?>
			<?php
			if($extensionbg!= 'transparent') { ?>
				<div id="rt-extension" style="background:<?php echo $extensionbg;?> no-repeat center top; background-size:cover;">
				<?php } else{ ?>
				<div id="rt-extension" <?php echo $gantry->displayClassesByTag('rt-extension'); ?> class="ttop">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('extension','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End extension **/ endif; ?>

		</div>
	</div>
	<?php /** Begin position-3 **/ if ($gantry->countModules('position-3')) : ?>
	<?php
	if($position3bg!= 'transparent') { ?>
		<div id="rt-position-3" style="background:<?php echo $position3bg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-position-3" <?php echo $gantry->displayClassesByTag('rt-position-3'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('position-3','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End position-3 **/ endif; ?>

	<?php /** Begin position-4 **/ if ($gantry->countModules('position-4')) : ?>
	<?php
	if($position4bg!= 'transparent') { ?>
		<div id="rt-position-4" style="background:<?php echo $position4bg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-position-4" <?php echo $gantry->displayClassesByTag('rt-position-4'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('position-4','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End position-4 **/ endif; ?>

	<?php /** Begin bottom **/ if ($gantry->countModules('bottom')) : ?>
	<?php
	if($bottombg!= 'transparent') { ?>
		<div id="rt-bottom" style="background:<?php echo $bottombg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-bottom" <?php echo $gantry->displayClassesByTag('rt-bottom'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('bottom','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End bottom **/ endif; ?>

	<?php /** Begin Footer Section **/ if ($gantry->countModules('footer') or $gantry->countModules('copyright')) : ?>
	<footer id="rt-footer-surround">
	<?php /** Begin footer **/ if ($gantry->countModules('footer')) : ?>
	<?php
	if($footerbg!= 'transparent') { ?>
		<div id="rt-footer" style="background:<?php echo $footerbg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-footer" <?php echo $gantry->displayClassesByTag('rt-footer'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('footer','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End footer **/ endif; ?>
	
	<?php /** Begin copyright **/ if ($gantry->countModules('copyright')) : ?>
	<?php
	if($copyrightbg!= 'transparent') { ?>
		<div id="rt-copyright" style="background:<?php echo $copyrightbg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-copyright" <?php echo $gantry->displayClassesByTag('rt-copyright'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End copyright **/ endif; ?>
	
	</footer>
	<?php /** End Footer Surround **/ endif; ?>
	<?php /** Begin debug **/ if ($gantry->countModules('debug')) : ?>
	<?php
	if($debugbg!= 'transparent') { ?>
		<div id="rt-debug" style="background:<?php echo $debugbg;?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
		<div id="rt-debug" <?php echo $gantry->displayClassesByTag('rt-debug'); ?> class="ttop">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('debug','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End debug **/ endif; ?>

	<div id="jd-copyright" class="pulse animated">
		<div class="rt-container">
			<div class="rt-block">
				<p>&copy; Copyright <?php echo date('Y'); ?> <strong style="text-transform:capitalize;"><?php $config = JFactory::getConfig(); echo $config['sitename']; ?></strong><a href="https://www.joomdev.com/products/templates" target="_blank"> Joomla Templates</a> by <a href="http://www.joomdev.com" target="_blank">JoomDev</a></p>
			</div>
		</div>
	</div>

	<?php /** Begin scroll **/ if ($gantry->countModules('scroll')) : ?>
	<div id="rt-scroll">
		<div class="rt-container">
			<?php echo $gantry->displayModules('scroll','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End scroll **/ endif; ?>

	<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
	<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
	<?php /** End Analytics **/ endif; ?>
	</body>
</html>
<?php
$gantry->finalize();
?>