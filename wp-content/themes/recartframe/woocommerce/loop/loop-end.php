<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total > 1 ) {
    ?>
    <div class="show__more--wrap">
        <div class="show__more"><?php the_field('nadpis_pokazat_eshhyo','option');?></div>
    </div>
    <?php

}
?>




</div>
</div>
</div>
</div>
</div>
<script>
    $(function() {
        $('select').selectric();
    });

    if ($(".page__inner").length) {
        var nextlink = $('.next.page-numbers').attr('href');
        $('.page__inner').on('click', '.show__more', function () {
            $('.loader-js').addClass('visible');
            $('.show__more--wrap').remove();
            $.ajax({
                url: nextlink,
                success: function (data) {
                    dataelem = $(data).find('.blog__content .blog__item');
                    $('.blog__content').append(dataelem);
                    if ($(data).find('.next.page-numbers').length) {
                        var triger = $('<div class="show__more--wrap"><div class="show__more"><?php the_field('nadpis_pokazat_eshhyo','option');?></div></div>');
                        $('.blog__content').append(triger);
                        nextlink = $(data).find('.next.page-numbers').attr('href');
                    }
                    $('.loader-js').removeClass('visible');
                }
            });
        });
    }
</script>
