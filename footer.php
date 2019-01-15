<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<?php
/**
 * Footer
 */
?>
<footer id="footer" class="footer" role="contentinfo">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell">
        <?php foundationpress_privacy_nav(); ?>
      </div>
    </div>
  </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
