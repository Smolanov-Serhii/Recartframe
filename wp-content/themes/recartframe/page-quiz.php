<?php
/**
 * Template Name: Квиз
 *
 */
?>
<?php
get_header();
$post_id = get_the_ID();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread__wrap">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
    <section class="container first__block first__block--rent first__block--presenter first__block--videos" href="#second__block"
             id="first__block">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="main__titles" data-aos="fade-right">
                        <h1><?php echo the_field('zagolovok_straniczy', $post_id); ?></h1>
                        <p><?php echo the_field('podzagolovok_straniczy', $post_id); ?></p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section -->
    <section class="container quizz aos" data-aos="fade-right">
        <div class="quizz__container">
            <div class="row">
                <div class="col-md-12">
                    <div class="quizz__list">
                        <?php
                        if( have_rows('gruppa_voprosov') ):
                            $counter = 1;
                            while( have_rows('gruppa_voprosov') ) : the_row();
                                $question = get_sub_field('vopros_dlya_gruppy');
                                ?>
                                <div class="quizz__item">
                                    <h3 class="quizz__item-title"><p><?php echo $counter . '. '; echo $question;?></p> <span class="important">*</span></h3>
                                    <?php
                                    if( have_rows('perechen_voprosov') ):
                                        $counterinner = 1;
                                        while( have_rows('perechen_voprosov') ) : the_row();
                                            $value = get_sub_field('otvety_na_vopros');
                                            ?>
                                            <label class="quizz__row">
                                                <input class="quizz-radio-item" name="<?php echo 'group-' . $counter;?>"type="radio" value="<?php echo $value;?>" <?php if($counterinner==1){echo 'checked';} ?>>
                                                <span></span>
                                                <?php echo $value;?>
                                            </label>
                                        <?php
                                        $counterinner ++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            <?php
                            $counter ++;
                            endwhile;
                        endif;
                        ?>
                        <div class="quizz__item">
                            <h3 class="quizz__item-title"><p><?php echo $counter . ". "; echo the_field('zagolovok_dlya_polya_fideo_i_foto_ssylok', $post_id); ?></p></h3>
                            <textarea class="quizz-textarea-item"></textarea>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </section>
    <section class="container first__block first__block--rent first__block--presenter first__block--videos form__order--quizz">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main__titles aos" data-aos="fade-right">
                            <p><?php echo the_field('nadpis_kontaktnye_dannye', $post_id); ?></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="col-md-12">
                <div class="form__wrap aos" data-aos="fade-right">
                    <?php echo do_shortcode('[contact-form-7 id="2700" title="Форма Квиз"]')?>
                </div>
            </div>
        </div>

    </section>
    <script>
        jQuery(document).ready(function($) {
            $('.js-send-custom-quizz').on('click', function() {
                let answers = "";
                $('#answers-block').val("");
                $( '.quizz__item' ).each(function( index ) {
                    let title = $(this).find('.quizz__item-title p').html();
                    let answer = $(this).find('input:checked').val();
                    let textarea = $(this).find('textarea').val();
                    if(!textarea){
                        textarea = "Ссылки не указаны";
                    }
                    answers = answers + title;
                    if(answer){
                        answers = answers + " - " + answer + "\n";
                    } else {
                        answers = answers + " - " + textarea + "\n";
                    }
                });
                $('#answers-block').val(answers);
                $('#quizz-send').trigger('click');
            });

        });
    </script>
<?php
get_footer();
?>