<?php
/**
* Template for displaying the footer
*
* Contains the closing of the id=main div and all content
* after. Calls sidebar-footer.php for bottom widgets.
*
* @package Crystal Meth
* @since 0.1
*/
?>

<div id="footer">
<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 blog-footer text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <?php get_sidebar( 'footer' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php
    /*
* Always have wp_footer() just before the closing </body>
* tag of your theme, or you will break many plugins, which
* generally use this hook to reference JavaScript files.
*/
wp_footer();
?>
</div>
<div class="row">
    <div id="copyright" class="col-xs-12 text-center">
        <?php
        $copyright_text = get_theme_mod( 'copyrighttext', '' ); ?>
        <?php if ( $copyright_text !== '' ) : ?>
        <p class="copyright"><?php echo $copyright_text; ?></p>
        <?php else: ?>
        <p class="copyright"><?php _e( 'Built by <a href="' . esc_url( 'http://damianboni.com', 'crystalmeth' ) . '" target="_blank">Damian Boni</a>' ); ?></p>
        <?php endif; ?>
        <p>
            <a href="#"><?php _e( 'Back to top', 'crystalmeth' ); ?></a>
        </p>
    </div>

</div>
</div>
</div>
</body>
</html>