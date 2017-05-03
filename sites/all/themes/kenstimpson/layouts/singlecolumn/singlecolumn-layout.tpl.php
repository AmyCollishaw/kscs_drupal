<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="background_left_top_bars">&nbsp;</div>
<div id="background_right_top_bars">&nbsp;</div>
<div id="background_house_text">&nbsp;</div>

<div class="main_ks_body">
	<div id="background_top_vertical_bar">&nbsp;</div>
	<div id="menu_left_vertical_bar">&nbsp;</div>
	<?php if($page['header']) { ?>
		<div class="ks_header"><?php echo render($page['header']); ?></div>
	<?php } ?>
	
	<?php if($page['menu']) { ?>
		<div class="ks_menu"><?php echo render($page['menu']); ?></div>
	<?php } ?>
	
	<div class="ks_banner">
		<?php if($page['logo']) { ?>
		<div class="ks_logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo"><?php echo "<img src=\"$logo\" />"; ?></a></div>
		<?php } ?>
		<?php if($page['banner_image']) { ?>
			<div class="ks_banner_image"><?php echo render($page['banner_image']); ?></div>
		<?php } ?>
	</div>
	<?php if($page['highlighted']) { ?>
		<div class="ks_highlight"><?php echo render($page['highlighted']); ?></div>
	<?php } ?>
	<!--<?php if($page['menu']) { ?>
		<div class="ks_menu"><?php echo render($page['menu']); ?></div>
	<?php } ?>-->


		<div class="ks_centre">
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
				<h1><?php print $title; ?></h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php if ($action_links): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>
		</div>
		
	</div>
	

	<?php if($page['footer']) { ?>
		<div class="ks_footer"><?php echo render($page['footer']); ?></div>
	<?php } ?>
	
	
</div>

<div class="ks_bottom">
	<div class="ks_bottom_container">

		<?php if($page['bottom_first']) { ?>
			<div class="ks_bottom_first"><?php echo render($page['bottom_first']); ?></div>
		<?php } ?>
		<?php if($page['bottom_centre']) { ?>
			<div class="ks_bottom_centre"><?php echo render($page['bottom_centre']); ?></div>
		<?php } ?>
		<?php if($page['bottom_second']) { ?>
			<div class="ks_bottom_second"><?php echo render($page['bottom_second']); ?></div>
		<?php } ?>
	
	</div>
</div>