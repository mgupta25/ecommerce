<?php
//about theme info
add_action( 'admin_menu', 'decor_lite_abouttheme' );
function decor_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'decor-lite'), esc_html__('About Theme', 'decor-lite'), 'edit_theme_options', 'decor_lite_guide', 'decor_lite_mostrar_guide');   
} 
//guidline for about theme
function decor_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'decor-lite'); ?>
		   </div>
          <p><?php esc_html_e('SKT Decor Lite is a Interior design, designer, designing, architect, landscaper suitable template for home furnishings, curtains, sofa, carpets, rugs, kitchen, home appliances, cleaning, architecture, art lovers, artistic, furniture store, carpenter, handyman related website template. Responsive, mobile friendly, translation ready, multilingual friendly and page builder friendly with SEO wise coding and SEO plugin compatible. Gallery, contact form and other plugins work just fine with this interior decor template. It is multipurpose template and comes with a ready to import Elementor template plugin as add on which allows to import 63+ design templates for making use in home and other inner pages. Use it to create any type of business, personal, blog and eCommerce website. It is fast, flexible, simple and fully customizable. WooCommerce ready designs.','decor-lite'); ?></p>
		  <a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'decor-lite'); ?></a> | 
				<a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'decor-lite'); ?></a> | 
				<a href="<?php echo esc_url(DECOR_LITE__SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'decor-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(DECOR_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>