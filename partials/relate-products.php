<?php

$currentID = (isset($args['currentID']) && $args['currentID'] !== '') ? $args['currentID'] : '';

$args = [
  'post_type' => 'products',
  'numberposts' => 10,
  'order' => 'DESC',
  'exclude' => $currentID,
];

$relatedProducts = get_posts($args);

if ($relatedProducts): ?>

  <div class="relative">
    <div class="swiper swiper-relacionados">
      <div class="swiper-wrapper">
        <!--         <div class="swiper-slide">
          <article class="card-product category-vida">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-1.jpg" alt="">
              <div class="overflow">
                <a href="" class="btn-asesor">Contactar asesor</a>
                <div class="details">
                  <a href="" class="btn-product">Ver producto</a>
                  <h4>Bafle Mini Bluetooth Zip Cork</h4>
                </div>
              </div>
            </figure>
            <div class="info">
              <h5>Estilo de vida</h5>
              <h6>Bafle Mini Bluetooth Zip Cork</h6>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="card-product category-entretenimiento">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-2.jpg" alt="">
              <div class="overflow">
                <a href="" class="btn-asesor">Contactar asesor</a>
                <div class="details">
                  <a href="" class="btn-product">Ver producto</a>
                  <h4>Bafle Mini Bluetooth Zip Cork</h4>
                </div>
              </div>
            </figure>
            <div class="info">
              <h5>Estilo de vida</h5>
              <h6>Bafle Mini Bluetooth Zip Cork</h6>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="card-product category-desarrollo">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-3.jpg" alt="">
              <div class="overflow">
                <a href="" class="btn-asesor">Contactar asesor</a>
                <div class="details">
                  <a href="" class="btn-product">Ver producto</a>
                  <h4>Bafle Mini Bluetooth Zip Cork</h4>
                </div>
              </div>
            </figure>
            <div class="info">
              <h5>Estilo de vida</h5>
              <h6>Bafle Mini Bluetooth Zip Cork</h6>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="card-product bienestar">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-4.jpg" alt="">
              <div class="overflow">
                <a href="" class="btn-asesor">Contactar asesor</a>
                <div class="details">
                  <a href="" class="btn-product">Ver producto</a>
                  <h4>Bafle Mini Bluetooth Zip Cork</h4>
                </div>
              </div>
            </figure>
            <div class="info">
              <h5>Estilo de vida</h5>
              <h6>Bafle Mini Bluetooth Zip Cork</h6>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="card-product bienestar">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-4.jpg" alt="">
              <div class="overflow">
                <a href="" class="btn-asesor">Contactar asesor</a>
                <div class="details">
                  <a href="" class="btn-product">Ver producto</a>
                  <h4>Bafle Mini Bluetooth Zip Cork</h4>
                </div>
              </div>
            </figure>
            <div class="info">
              <h5>Estilo de vida</h5>
              <h6>Bafle Mini Bluetooth Zip Cork</h6>
            </div>
          </article>
        </div> -->
        <?php foreach ($relatedProducts as $index => $relatedProduct): $relatedProductsCat = get_the_terms($relatedProduct->ID, 'products_cat');

          $productsCat = get_the_terms($relatedProduct->ID, 'products_cat');
          if ($productsCat && !is_wp_error($productsCat)) {
            $firstCat = $productsCat[0];
            $taxcolor = get_field('tax_color', 'term_' . $firstCat->term_id);
          }
        ?>

          <div class="swiper-slide">
            <article class="card-product category-vida category-<?php echo esc_attr($index); ?>">
              <figure>
                <?php if (has_post_thumbnail()): $featuredimgurl = get_the_post_thumbnail_url($relatedProduct->ID, 'bones-thumb-528'); ?>

                  <img src="<?php echo esc_url($featuredimgurl); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <div class="overflow">
                  <a href="https://wa.me/+573218033728" class="btn-asesor">Contactar asesor</a>
                  <div class="details">
                    <a href="<?php echo get_permalink($relatedProduct->ID); ?>" class="btn-product">Ver producto</a>
                    <h4><?php echo $relatedProduct->post_title; ?></h4>
                  </div>
                </div>
                <style>
                  .card-product.category-<?php echo esc_attr($index); ?>:hover figure {
                    border-color: <?php echo esc_attr($taxcolor); ?>
                  }
                </style>
              </figure>
              <div class="info">
                <?php if (!empty($relatedProductsCat) && !is_wp_error($relatedProductsCat)): $category = wp_list_pluck($relatedProductsCat, 'name'); ?>
                  <h5><?php echo esc_html(implode(' - ', $category)); ?></h5>
                <?php endif; ?>
                <?php if (get_the_content($relatedProduct->ID)): ?>
                  <h6><?php echo get_the_content($relatedProduct->ID); ?></h6>
                <?php endif; ?>
              </div>
            </article>
          </div>
        <?php endforeach;  ?>
      </div>
    </div>
    <div class="swiper-button-next next-relacionados"></div>
    <div class="swiper-button-prev prev-relacionados"></div>
    <div class="swiper-pagination pagination-site pagination-relacionados"></div>
  </div>
<?php endif; ?>