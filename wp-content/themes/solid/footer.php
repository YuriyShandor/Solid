<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */

?>

	</div><!-- #content -->

	 <div id="footerwrap">
	 	<div class="container">
			<?php if ( is_active_sidebar( 'footer' ) ) { ?>
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
			 	</div>
			<?php } ?>
			<div class="row">
        <div class="col-lg-12">
          <p>&copy; Yuriy Shandor | 2018</p>
        </div>
      </div>
	 	</div>
	 </div>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
