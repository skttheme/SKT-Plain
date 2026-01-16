<?php
//about theme info
add_action( 'admin_menu', 'skt_plain_abouttheme' );
function skt_plain_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-plain'), esc_html__('About Theme', 'skt-plain'), 'edit_theme_options', 'skt_plain_guide', 'skt_plain_mostrar_guide');   
} 
//guidline for about theme
function skt_plain_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-plain'); ?>
		   </div>
          <p><?php esc_html_e('SKT Plain is a clean minimalistic design. This WordPress theme is perfect for uncluttered, basic and streamlined layout users. It is straightforward and compatible with WooCommerce and Elementor. Ideal for those who appreciate a pure, neutral, or no-frills aesthetic. It is lightweight and fast loading due to subtle graphics and minimal scripts. Modest design suits photographers, portfolio, architect and interior designers and corporate styled agencies.','skt-plain'); ?></p>
          <a href="<?php echo esc_url(SKT_PLAIN_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-plain'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_PLAIN_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-plain'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PLAIN_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-plain'); ?></a> | 
				<a href="<?php echo esc_url(SKT_PLAIN_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-plain'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_PLAIN_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-plain'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>