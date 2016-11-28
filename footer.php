<?php
/**
 * Footer section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>

        <section class="copyright dark">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="copyrightinfo">

                            <p>
                                <?php if ( $integral['copyright-text'] ) : ?>

                                <?php echo $integral['copyright-text']; ?>

                                <?php else : ?>

                                <?php esc_html_e('&copy; 2016 All Rights Reserved', 'integral'); ?>

                                <span class="sep"> | </span>

                                <?php printf( __( '<a href="https://pandaveeb.eu/feed/"><img src="http://www.clker.com/cliparts/0/5/a/e/12576752211189733180Minduka_RSS_icon_3.svg.med.png" width="40px"></a>', 'integral' ), 'integral', '<img src="http://files.softicons.com/download/application-icons/soft-icons-by-kyo-tux/png/32/RSS.png">' ); ?>

                                <?php endif; ?>
				
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <?php wp_footer(); ?>
        <?php get_template_part('sections/custom'); ?>
        <!-- PrettyPhoto Code START -->
        <script type="text/javascript" charset="utf-8">
                jQuery(document).ready(function($){
                    $("a[rel^='prettyPhoto']").prettyPhoto({
                        social_tools: false,
                        theme: 'light_rounded',
                        show_title: false,
                        callback: function(){}
                    });
                });
        </script>
        <!-- PrettyPhoto Code END -->
    
    </body>

</html>