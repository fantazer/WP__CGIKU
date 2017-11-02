<?php
//echo $_REQUEST['utm_source'];
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="win-1251">

  <title>Document</title>



  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link  type="image/x-icon" rel="icon" href="favicon.ico">
  <meta name="format-detection" content="telephone=no">
  <!-- <link rel="shortcut icon" href="favicon.png" /> -->



  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" >

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fancy/jquery.fancybox.css">

  <link rel="stylesheet" href="http://webfonts.ru/import/ptsans.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/medias.css">

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-1.2.1.pack.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


  <?php wp_head(); ?>

</head>

<body>



  <!-- header -->

  <div class="header">

    <div class="container ">

      <div class="row">

        <div class="col-md-12 header__el">

          <a href="/">

            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">

          </a>


          <a href="/kontakty/" class="black">
            <div class="header-contInf">
              <div class="header-contInf_item ">
                <img class="header-icon" src="<?php echo get_template_directory_uri();?>/img/time-icon.png" height="52" width="52" alt="">
                <span class="think-text">Наши телефоны</span>
                <span>+7 (495) 514-84-13</span>
                <span>+7 (495) 283-96-83</span>
              </div>


              <div class="clear"></div>
              <div class="header-contInf_item">
                <img class="header-icon" src="<?php echo get_template_directory_uri();?>/img/24-icon.png" height="52" width="52" alt="">
                <span class="think-text">Наша почта</span><br>
                <span>info@cgiku.ru</span>
              </div>
            </div>
           </a>

              <div class="header-contInf hidden-xs">
                <div class="header-contInf_item">
                  <span class="think-text">Работа горячей линии</span>
                  <span>ежедневно c 9-00 ч. до 20-00 ч. </span>
                </div>
                <div class="clear"></div>
                <div class="header-contInf_item">
                  <span class="think-text">ПРИЕМ ОНЛАЙН-ЗАЯВОК:</span>
                  <span>КРУГЛОСУТОЧНО </span>
                </div>
              </div>


        </div>

      </div>

    </div>

  </div>

  <!-- header -->



  <!-- top-menu -->

  <div class="top-nav">
    <div class="menu-toggle-text">Меню</div>
    <img src="<?php echo get_template_directory_uri();?>/img/menu.png" alt="" class="menu-toggle">
    <div class="container ">
      <div class="row">
        <div class="col-md-12 nav-main-wrap">
           <ul class="nav-main">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/uslugi/">Услуги</a>
                        <ul>
                          <li><a href="/kadastrovy-e-raboty/">Кадастровые работы</a></li>
                          <li><a href="/geodezicheskie-raboty/">Геодезические работы</a></li>
                        </ul>
                    </li>
                   <?
                      $args = array(
                      'cat'=> 3,
                      'order' => 'ASC'
                      );

                      query_posts($args);
                      while (have_posts()) : the_post();
                      printf('
                      <li class="menu__items"><a href="%s">%s</a></li>
                      ',get_permalink(),get_the_title());
                       endwhile;
                       wp_reset_query();
                   ?>
              </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- top-menu -->

