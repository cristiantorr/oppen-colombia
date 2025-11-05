<?php $productsCat = get_the_terms(get_the_ID(), 'products_cat');
?>
<article class="card-product category-vida">

  <figure>
    <?php if (has_post_thumbnail()): $featuredimgurl = get_the_post_thumbnail_url($articles->ID, 'bones-thumb-528'); ?>

      <img src="<?php echo esc_url($featuredimgurl); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>
    <div class="overflow">
      <a href="" class="btn-asesor">Contactar asesor</a>
      <div class="details">
        <a href="<?php echo get_permalink($articles->ID); ?>" class="btn-product">Ver producto</a>
        <?php the_title("<h4>", "</h4>"); ?>
      </div>
    </div>
  </figure>
  <div class="info">
    <?php if (!empty($productsCat) && !is_wp_error($productsCat)): $category = wp_list_pluck($productsCat, 'name'); ?>
      <h5><?php echo esc_html(implode(' - ', $category)); ?></h5>
    <?php endif; ?>
    <?php if (get_the_content($relatedProduct->ID)): ?>
      <h6><?php echo get_the_content($relatedProduct->ID); ?></h6>

    <?php endif; ?>
  </div>
</article>