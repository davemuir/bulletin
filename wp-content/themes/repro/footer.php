
<div id="footer">

    <div id="footer_border"></div>

    <div class="container_12">
        
        <div class="grid_3">
        
          <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
          
        </div><!--grid_3-->
        
        <div class="grid_3">
        
          <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
          
        </div><!--grid_3-->
        
        <div class="grid_3">
        
          <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
          
        </div><!--grid_3-->
        
        <div class="grid_3">
        
          <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 4') ) ?>
          
        </div><!--grid_3-->
        
        <div class="clear"></div>
    
    </div><!--container_12-->
    
    <div id="footer_bottom">

        <div class="container_12">
            
            <div class="grid_6">
            
                <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
            
            </div><!--grid_6-->
            
            <div class="grid_6">
            
                <p class="right"><?php _e('Powered by', 'framework') ?> <a href="http://wordpress.org/"><?php _e('WordPress', 'framework') ?></a>. <a href="http://www.themezilla.com/themes/repro">Repro Theme</a> by <a href="http://www.themezilla.com">ThemeZilla</a>  <br/>Site Design by <a href="http://davidmuirdesign.com">David Muir Design</a></p>
            
            </div><!--grid_6-->
            
            <div class="clear"></div>
            
        </div><!--container_12-->

    </div><!--footer_bottom-->
  
</div><!--footer-->

<!-- Theme Hook -->
<?php wp_footer(); ?>

</body>
</html>