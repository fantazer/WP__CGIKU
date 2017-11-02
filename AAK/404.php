<?get_header();?>

<div class="container ">
    <div class="row">
        <div class="col-md-12 main-content">
            <? include('left_part.php'); ?>
            <!-- center-part -->
            <div class="col-md-7 col-sm-8 col-xs-8 midle-mainpart content">
                <h1>Страница не найдена</h1>
                 <p>К сожалению страница не найдена</p>
                 <a href="">Перейти на главную</a>
                 <img class="bxsh0" src="<?php echo get_template_directory_uri(); ?>/img/404.png">
                <!-- Форма регистрации -->
                <div class="form-block">
                        <div class="titlebg">
                            <div class="title">Задайте вопрос нам прямо сейчас</div>
                        </div>
                        <div class="form-content">
                            <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
                        </div>
                        <div class="bottom">
                            <div class="text">
                                В соответствии с Федеральным законом Российской Федерации  от 27 июля 2006 г. N 152 "О персональных данных" - мы гарантируем полную анонимность всех консультаций
                            </div>
                        </div>
                </div>
                <!-- Форма регистрации -->
                <div class="seo_text">
                 <?php echo CFS()->get('seo_text'); ?>
                </div> 
                
             

            </div>
            <!-- center-part -->
            <? include('right_part.php'); ?>
            <div class="clear"></div>

        </div>

    </div>

</div>

<?get_footer();?>

