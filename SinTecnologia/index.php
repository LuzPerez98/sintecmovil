<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" media="screen" />
<!--[if lte IE 7]>
<style media="screen,projection" type="text/css">@import "<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style-ie.css";</style>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/includes/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('#ico_twitter img, #board_carusel_nav img');
</script>
<![endif]-->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/includes/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/includes/stepcarousel.js"></script>
<script type="text/javascript">
stepcarousel.setup({
		galleryid: 'board_carusel', //id of carousel DIV
		beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
		panelclass: 'board_item', //class of panel DIVs each holding content
		autostep: {enable:true, moveby:1, pause:<?php echo $this->params->get('car_pause'); ?>},
		panelbehavior: {speed:<?php echo $this->params->get('car_speed'); ?>, wraparound:true, persist:true},
		defaultbuttons: {enable: false, moveby: 1, leftnav: ['<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/button_prev.png', -5, 80], rightnav: ['<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/button_next.png', -20, 80]},
		statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
		contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
	})
</script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/navigation.css" type="text/css" media="screen" />
<script type="text/javascript">
//<![CDATA[
jQuery.noConflict(); 
jQuery(document).ready(function(){
	jQuery('#nav ul.menu ul').addClass('subnav');
	jQuery("#nav ul.subnav").parent().append("<span class='trigger'></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	jQuery("ul.menu li span").click(function() { //When trigger is clicked...
		//Following events are applied to the subnav itself (moving subnav up and down)
		jQuery(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click
		jQuery(this).parent().hover(function() {
		}, function(){	
			jQuery(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});
		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			jQuery(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			jQuery(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
});
 //]]>
</script>
<?php
// Template Variables 
// Do Not Modify
// To make changes, please edit the template paramaters in the Joomla Admin interface
$twitter = $this->params->get('twitter');
$slogan = $this->params->get('slogan');
$rss = $this->params->get('rss');
$searchvalue = $this->params->get('searchvalue');
$validation = $this->params->get('validation');
?>
</head>
<body class="home blog">
	<div id="page">
		<div id="header">
			<div id="logo"><a href="<?php echo $this->baseurl ?>"><?php echo $mainframe->getCfg('sitename');?></a><p class="description"><?php echo $this->params->get('slogan');?></p></div>
		<div class="banner"><jdoc:include type="modules" name="bannertop" /></div>
		</div>
		<div id="nav">
			<jdoc:include type="modules" name="navigation" style="raw" />
		</div>
		<div id="board">
			<div id="board_inner">
				<div id="board_left">
					<h2><?php echo $this->params->get('car_title'); ?></h2>
					<div id="board_items">
						<div id="board_body">
						  <div id="board_carusel">
							<div class="belt">
								<?php if ($this->params->get('car_slide1')): ?>					  
								<div class="board_item">
									<?php echo $this->params->get('car_slide1');?>
								</div>
								<?php endif; ?>	
								<?php if ($this->params->get('car_slide2')): ?>					  
								<div class="board_item">
									<?php echo $this->params->get('car_slide2');?>
								</div>
								<?php endif; ?>	
								<?php if ($this->params->get('car_slide3')): ?>					  
								<div class="board_item">
									<?php echo $this->params->get('car_slide3');?>
								</div>
								<?php endif; ?>	
								<?php if ($this->params->get('car_slide4')): ?>					  
								<div class="board_item">
									<?php echo $this->params->get('car_slide4');?>
								</div>
								<?php endif; ?>	
								<?php if ($this->params->get('car_slide5')): ?>					  
								<div class="board_item">
									<?php echo $this->params->get('car_slide5');?>
								</div>
								<?php endif; ?>	
							</div>
						  </div>
						</div>
						<ul id="board_carusel_nav">
							<li><a href="javascript:stepcarousel.stepBy('board_carusel', -1)"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/button_prev.png" alt="Prev" /></a></li>
							<li><a href="javascript:stepcarousel.stepBy('board_carusel', 1)"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/button_next.png" alt="Next" /></a></li>
						</ul>
					</div>
				</div>
				<div id="sidebar_twitter">
					<p id="ico_twitter"><a target="_blank" href="http://twitter.com/<?php echo $twitter; ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/ico_twitter.png" alt="twitter" /></a></p>
					<ul id="twitter_update_list"><li>&nbsp;</li></ul>
					<div id="main_search">
						<form method="post" id="searchform_top" action="index.php">
							<div>
								<input type="text" onfocus="if(this.value=='<?php echo $searchvalue; ?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo $searchvalue; ?>';" value="<?php echo $searchvalue; ?>" name="searchword" id="searchform_top_text" onclick="this.value='';" />
								<input type="hidden" value="search" name="task" />
								<input type="hidden" value="com_search" name="option" />
								<input type="hidden" value="1" name="Itemid" />
								<input type="image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/button_go.gif" id="gosearch" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="body">
			<div id="content" class="narrowcolumn">
				<div class="entry">
					<jdoc:include type="component" />
				</div>
			</div>
			<div id="sidebar_content">
				<div id="sidebar_ads">
					<jdoc:include type="modules" name="ads" style="raw"/>
				</div>				
				<?php if ($rss): ?>
				<p class="rss"><a href="<?php echo $this->baseurl ?>/index.php?format=feed&amp;type=rss" title="Rss">Subscribe to Rss : <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/btn_rss.gif" alt="Rss" /></a></p>
				<?php endif; ?>
				<div id="sidebar">
					<jdoc:include type="modules" name="left" style="xhtml"/>
				</div>
				<div id="sidebar_right">
					<jdoc:include type="modules" name="right" style="xhtml"/>
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="footer_info">
				<p><span class="copy">&copy;</span> <?php echo date("Y"); ?> <a href="<?php echo $this->baseurl ?>"><?php echo $mainframe->getCfg('sitename');?></a> - All Rights Reserved. </p>
				<p class="copyrights" <?php if ($this->params->get('hide_backlink')): ?>style="display:none"<? endif ;?>><a href="http://www.joomlaport.com" title="Free Joomla Templates" target="_blank">Free Joomla Templates</a></p>
			</div>
			<?php if ($validation) {?>
			<div id="validation">
				<a id="xhtml" target="_blank" href="http://validator.w3.org/check?verbose=1&amp;uri=<?php echo urlencode('http://'.$_SERVER['SERVER_NAME'].$this->baseurl); ?>">&nbsp;</a>
				<a id="css" target="_blank" href="http://jigsaw.w3.org/css-validator/validator?profile=css21&amp;warning=0&amp;uri=<?php echo urlencode('http://'.$_SERVER['SERVER_NAME'].$this->baseurl); ?>">&nbsp;</a>
				<div class="clr"></div>
			</div>
			<?php } ?>
		</div>			
	</div>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<?php if ($twitter) {?>		
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo $twitter;?>.json?callback=twitterCallback2&amp;count=1"></script>
	<?php } ?>
</body>
</html>
