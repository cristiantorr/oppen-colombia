<?php get_header(); ?>

<?php
if (function_exists('get_field')):

  $detailProduct = get_field("detail_prod");
  $productsCat = get_the_terms(get_the_ID(), 'products_cat');

  if (!empty($detailProduct)):
    $prodGalleries = $detailProduct["prod_gallery"]; ?>
    <section class="main-single-producto relative clear-fix">
      <div class="wrapper-main center">
        <div class="oppen-single-product">
          <?php if (!empty($prodGalleries)): ?>
            <div class="gallery-prpducto">
              <div class="swiper swiper-gallery">
                <div class="swiper-wrapper">
                  <?php foreach ($prodGalleries as  $prodGallery):
                    $image = $prodGallery["gallery_img"];
                    if ($image): ?>
                      <div class="swiper-slide">
                        <figure>
                          <a data-fancybox="gallery" data-src="<?php echo esc_url($image["url"]); ?>">
                            <img src="<?php echo esc_url($image["url"]); ?>" alt="">
                          </a>
                        </figure>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="swiper-pagination pagination-site pagination-gallery"></div>
            </div>
          <?php endif; ?>
          <article class="card-single">
            <?php if (!empty($productsCat) && !is_wp_error($productsCat)): $category = wp_list_pluck($productsCat, 'name'); ?>
              <h6><?php echo esc_html(implode(' - ', $category)); ?></h6>

            <?php endif; ?>
            <?php if (!empty(get_the_content())): ?>
              <h5><?php the_content(); ?></h5>
            <?php endif; ?>
            <hr>
            <h1><?php the_title(); ?></h1>
            <?php if (!empty($detailProduct["prod_desc"])): ?>
              <p><?php echo esc_html($detailProduct["prod_desc"]); ?></p>
            <?php endif; ?>
            <?php if (!empty($detailProduct["prod_list"])) {
              echo wp_kses_post($detailProduct["prod_list"]);
            }; ?>
            <a href="https://wa.me/+573218033728" target="_blank" class="btn-asesor">Contactar asesor</a>
          </article>
        </div>
      </div>
    </section>
<?php endif;
endif; ?>


<section class="main-products-relacionados relative clear-fix">
  <div class="wrapper-main center">
    <h2>Productos relacionados</h2>
    <?php

    get_template_part(
      'partials/relate',
      'products',
      [
        'currentID' => get_the_ID(),
      ]
    );

    ?>

  </div>

</section>

<?php get_footer(); ?>