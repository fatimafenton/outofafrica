<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( ! siteorigin_page_setting( 'hide_footer_widgets', false ) ) : ?>
		<div id="footer-widgets" class="full-container">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		</div><!-- #footer-widgets -->
	<?php endif; ?>

	<?php $site_info_text = apply_filters('vantage_site_info', siteorigin_setting('general_site_info_text') ); if( !empty($site_info_text) ) : ?>
		<div id="site-info">
			<?php echo wp_kses_post($site_info_text) ?>
		</div><!-- #site-info -->
	<?php endif; ?>
<div class="footer-logos" style= "" >
<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/08/Woolworths.png" alt="" height="42" width="42" >

<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/08/ProminentPaints.png" alt="" height="50" width="55" >

<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/08/TigerWheelandTyre.png" alt="" height="42" width="42" >

<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/08/GrowthPoint.png" alt="" height="50" width="55" >

<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/07/CApeLOGO.png" alt="" height="42" width="42" >

<img src="http://localhost:8888/Out%20of%20Africa/wp-content/uploads/2017/07/BaysideLogo.png" alt="" height="42" width="42" >
</div>
	<?php echo apply_filters( 'vantage_footer_attribution', '<div id="theme-attribution">' . sprintf( __('Designed by <a href="%s">Quirky30</a>', 'vantage'), 'http://www.quirky30.co.za/') . '</div>' ) ?>



</footer><!-- #colophon .site-footer -->
