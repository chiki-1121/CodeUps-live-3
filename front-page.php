<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$news = esc_url(home_url('/news/'));
$service = esc_url(home_url('/service/'));
$works = esc_url(home_url('/works/'));
$company = esc_url(home_url('/company/'));
$recruit = esc_url(home_url('/recruit/'));
$contact = esc_url(home_url('/contact/'));
?>

<section class="l-mv p-mv js-mv-height">
  <div class="p-mv__inner">
    <div class="p-mv__header">
      <h2 class="p-mv__title">
        WEB <br class="u-mobile">DESIGN <br class="u-mobile">SPECIALIST
      </h2>
      <p class="p-mv__subtitle">
        お客様の夢を叶える<br class="u-mobile">Webサイトを制作
      </p>
      <div class="p-mv__btn">
        <a href="<?php echo $contact; ?>" class="c-mv-btn">CONTACT</a>
      </div>
    </div>
    <div class="p-mv__scroll"><span>SCROLL</span></div>
  </div>
</section>

<section class="l-topNews p-news">
  <div class="p-news__inner l-inner">
    <div class="p-news__title c-section-header c-section-header--left">
      <h2 class="c-section-header__engtitle ">news</h2>
      <p class="c-section-header__jatitle">お知らせ</p>
    </div>
    <div class="p-news__items">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $post_query = new WP_Query($args);
      if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post(); ?>
          <div class="p-news__item p-news-content">
            <div class="p-news-content__meta">
              <time datetime="<?php the_time('c'); ?>3" class="p-news-content__date"><?php the_time('Y.m.d'); ?></time>
              <p class="p-news-content__category">
                <?php $category = get_the_category();
                echo '<span>' . $category[0]->name . '</span>'; ?>
              </p>
            </div>
            <div class="p-news-content__link">
              <a href="<?php the_permalink(); ?>" class="p-news-content__text"><?php the_title(); ?></a>
            </div>
          </div>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<section class="l-topService p-service">
  <div class="p-service__inner l-inner">
    <div class="p-service__title c-section-header">
      <h2 class="c-section-header__engtitle">service</h2>
      <p class="c-section-header__jatitle">事業内容</p>
    </div>
    <div class="p-service__items">
      <div class="p-service__item p-card">
        <div class="p-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/service_1.jpg" alt="サービス画像1">
        </div>
        <div class="p-card__body">
          <h3 class="p-card__title">Webサイト制作</h3>
          <p class="p-card__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。</p>
        </div>
      </div>
      <div class="p-service__item p-card">
        <div class="p-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/service_2.jpg" alt="サービス画像2">
        </div>
        <div class="p-card__body">
          <h3 class="p-card__title">LP制作</h3>
          <p class="p-card__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。</p>
        </div>
      </div>
      <div class="p-service__item p-card">
        <div class="p-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/service_3.jpg" alt="サービス画像3">
        </div>
        <div class="p-card__body">
          <h3 class="p-card__title">アプリ開発</h3>
          <p class="p-card__text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
        </div>
      </div>
    </div>
    <div class="p-service__btn">
      <a href="<?php echo $service; ?>" class="c-button">more</a>
    </div>
  </div>
</section>

<section class="l-topWorks p-works">
  <div class="p-works__inner l-inner">
    <div class="p-works__contents">
      <div class="p-works__images">
        <!-- Swiper -->
        <div class="swiper js-works-swiper">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => -1,
            );
            $works_query = new WP_Query($args);
            if ($works_query->have_posts()) : while ($works_query->have_posts()) : $works_query->the_post(); ?>
                <div class="swiper-slide p-works__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?><!-- アイキャッチ画像指定されている場合 -->
                  <?php else : ?>
                    <img src='<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimg.png'><!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                  <?php endif; ?>
                </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <div class="swiper-pagination js-works-pagination"></div>
      </div>
      <div class="p-works__text-body">
        <div class="p-works__title c-section-header">
          <h2 class="c-section-header__engtitle">works</h2>
          <p class="c-section-header__jatitle">制作実績</p>
        </div>
        <div class="p-works__text-block">
          <p class="p-works__text">
            様々なジャンルのWebサイト制作が可能です。<br>
            ご購入やお申込み数の増加などを実現します！
          </p>
        </div>
        <div class="p-works__btn">
          <a href="<?php echo $works; ?>" class="c-button">more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-topCompany p-company">
  <div class="p-company__inner l-inner">
    <div class="p-company__title c-section-header">
      <h2 class="c-section-header__engtitle">company</h2>
      <p class="c-section-header__jatitle">私たちについて</p>
    </div>
    <div class="p-company__contents">
      <h3 class="p-company__subtitle">
        <span class="p-company__yellow">サイトのゴール =</span><br class="u-mobile">
        <span class="p-company__yellow">夢を叶えること</span>
      </h3>
      <div class="p-company__content">
        <p class="p-company__text">
          お客様の夢を叶えること。<br>
          それがWebサイトのゴールであり、<br class="u-mobile">私たちが目指すことです。<br>
          だからこそちゃんと成果を出すサイトを<br class="u-mobile">全力でお作りします。<br>
          お客様の笑顔を見たい。<br>
          夢を実現する手助けをさせてください。
        </p>
      </div>
      <div class="p-company__btn">
        <a href="<?php echo $company; ?>" class="c-button">more</a>
      </div>
    </div>
  </div>
</section>

<section class="l-topRecruit p-recruit">
  <div class="p-recruit__inner l-inner">
    <div class="p-recruit__wrapper">
      <div class="p-recruit__img">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/recruit_1.jpg" alt="">
      </div>
      <div class="p-recruit__contents">
        <div class="p-recruit__title c-section-header">
          <h2 class="c-section-header__engtitle">recruit</h2>
          <p class="c-section-header__jatitle">採用情報</p>
        </div>
        <div class="p-recruit__text-block">
          <p class="p-recruit__text">
            私たちと一緒に働きませんか？
          </p>
        </div>
        <div class="p-recruit__btn">
          <a href="<?php echo $recruit; ?>" class="c-button">more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>