<?php get_header() ?>
<main class="page-main">
  <div class="formEmail hidden">
    <div class="formEmail__wrapper">
      <!--<form class="page-form" action="send.php" method="post">
        <h3>Отправить письмо:</h3>
        <input class="page-form__input" type="text" name="fio" placeholder="Укажите ФИО">
        <input class="page-form__input"  type="text" name="email" placeholder="Укажите e-mail">
        <textarea class="page-form__textarea"  name="discr" placeholder="Задайте задесь ваш вопрос"></textarea>
        <input type="submit" value="Отправить">
        <span class="close-popup" tabindex="0">X</span>
      </form>--><div class="page-form">
<?php echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]');?>
 <span class="close-popup" tabindex="0">X</span></div>
    </div>
    
  </div>

  <section class="advantages">
<div class="advantages__wrapper">
  <h2 class="section-title visually-hidden">Наши преимущества</h2>
  <ul class="advantages__list">
    
          <?php
          // параметры по умолчанию
          $posts = get_posts( array(
          'numberposts' => 3,
          'category_name'    => advantages,
          'order' => ASC,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
          foreach( $posts as $post ){ ?> <li class="advantages__item"> <?php
          setup_postdata($post);
          ?>
          <h3 class="advantages__header"><?php the_title();?></h3>
          
            <?php the_content(); ?>
         
          
          <?php
          }
          wp_reset_postdata(); // сброс
          ?>
          
        
      </ul>
    </div>
  </section>
<?php get_template_part('prices'); ?>

  <section id="promo" class="promo ">
    <div class="promo__wrapper">
     
      
        <?php
          // параметры по умолчанию
          $posts = get_posts( array(
          'numberposts' => 3,
          'category_name'    => promo,
          'order' => ASC,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
          foreach( $posts as $post ){ ?>  <?php
          setup_postdata($post);
          ?>
          <h2 class="promo_header section-title"><?php the_title();?></h2>
          
           <?php the_content(); ?>
         
          
          <?php
          }
          wp_reset_postdata(); // сброс
          ?>
        
      
    </div>
  </section>
  <?php get_template_part('gallery'); ?>
<section id="map" class="map">
<h2 class="map_header section-title visually-hidden">Карта</h2>
<div><iframe class="map__frame" src="https://yandex.ru/map-widget/v1/-/CGSuyQZF" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe></div>
</section>
</main>
<?php get_footer() ?>