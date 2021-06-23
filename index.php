<?php get_header(); ?>

  <main class="main">
    <div class="container">
      <h3 class="main__title">
        <?php the_field('main__title') ?>
      </h3>
      <p class="main__text">
        <?php the_field('main__text') ?>
      </p>
      <div class="decor-img">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/main-img.png" alt="декоративный элемент деревянная стружка">
      </div>

      <div class="project">
        <h3 class="project__title">
          <?php the_field( 'project__title' ); ?>
        </h3>
<!-- === ACF script === -->
  <?php 
            
    $featured_posts = get_field('project__item');
    if( $featured_posts ): ?>
      <ul>
        <?php foreach( $featured_posts as $post ): 
          setup_postdata($post); ?>
            <li class="project__item">
              <div class="project__name">
                <?php the_field( 'project__name' ); ?>
              </div>
              <div class="project__size">
                <?php the_field( 'project__size' ); ?>
              </div>
              <div class="project__area">
                <?php the_field( 'project__area' ); ?>
              </div>
              <div class="project__price">
                <?php the_field( 'project__price' ); ?>
              </div>
              <div class="project__image">
                <div class="project__image-item">
                  <img src="<?php the_field( 'project__image-photo' ); ?>" alt="фотография дома #1">
                </div>
                <div class="project__image-item">
                  <img src="<?php the_field( 'project__image-scheme' ); ?>" alt="схема-план дома #1">
                </div>
              </div>
            </li>
        <?php endforeach; ?>
      </ul>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<!-- === / ACF script === -->

          <!-- <p class="project__name">
            ДОМ #1
          </p>
          <p class="project__size">
            Размер дома: 6 x 6
          </p>
          <p class="project__area">
            Общая площадь дома: 54 кв. м
          </p>
          <p class="project__price">
            Стоимость - 402 000 рублей
          </p>
          <div class="project__image">
            <div class="project__image-item">
              <img src="images/project-1-house.jpg" alt="фотография дома #1">
            </div>
            <div class="project__image-item">
              <img src="images/project-1-scheme.jpg" alt="схема-план дома#1">
            </div>
          </div> -->
        <!-- <div class="project__item">
          <p class="project__name">
            ДОМ #2
          </p>
          <p class="project__size">
            Размер дома: 6 x 7,5
          </p>
          <p class="project__area">
            Общая площадь дома: 72 кв. м
          </p>
          <p class="project__price">
            Стоимость - 457 000 рублей
          </p>
          <div class="project__image">
            <div class="project__image-item">
              <img src="images/project-2-house.jpg" alt="фотография дома #2">
            </div>
            <div class="project__image-item">
              <img src="images/project-2-scheme.jpg" alt="схема-план дома#2">
            </div>
          </div>
        </div> -->
        <!-- <div class="project__item">
          <p class="project__name">
            ДОМ #3
          </p>
          <p class="project__size">
            Размер дома: 8 x 7,5
          </p>
          <p class="project__area">
            Общая площадь дома: 92 кв. м
          </p>
          <p class="project__price">
            Стоимость - 635 000 рублей
          </p>
          <div class="project__image">
            <div class="project__image-item">
              <img src="images/project-3-house.jpg" alt="фотография дома #3">
            </div>
            <div class="project__image-item">
              <img src="images/project-3-scheme.jpg" alt="схема-план дома#3">
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="download">
      <img class="download__image" src="<?php bloginfo( 'template_url' ); ?>/assets/images/download.png" alt="">
      <div class="download__link-box">
        <a class="download__link" href="<?php the_field('download__link') ?>" download>
          скачать весь каталог домов
        </a>
      </div>
    </div>
    <div class="container">
      <div class="gallery">
        <h3 class="gallery__title">
          <?php the_field('gallery__title') ?>
        </h3>
        <p class="gallery__text">
          <?php the_field('gallery__text') ?>
        </p>
        <div id="gallery__inner">
        <?php the_field('gallery') ?>
          <!-- <a href="images/item-1.jpg" title="Проект №1"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №2"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №3"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №4"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №5"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №6"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №7"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №8"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №9"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №10"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №11"><img src="images/item-1.jpg" alt=""></a>
          <a href="images/item-1.jpg" title="Проект №12"><img src="images/item-1.jpg" alt=""></a> -->
        </div>
      </div>
      <div class="decor-img">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/main-img.png" alt="декоративный элемент деревянная стружка">
      </div>
    </div>
  </main>

<?php get_footer(); ?>