<?php $productsCat = get_the_terms(get_the_ID(), 'products_cat');
$taxcolor = get_field("tax_color", "term_" . $productsCat[0]->term_id);
$taxicon  = get_field("tax_icon", "term_" . $productsCat[0]->term_id);
$productName = get_the_title();
$detailProduct = get_field("detail_prod");

/* $phone = '573218033728';
$mensaje = urlencode("Estoy interesado en este producto: $productName");
$whatsapp_url = "https://wa.me/$phone?text=$mensaje"; */
?>
<article class="card-product category-vida <?php echo 'prod-' . get_the_ID(); ?>" data-desc="<?php echo esc_html($detailProduct["prod_desc"]); ?>" data-list="<?php echo esc_html($detailProduct["prod_list"]); ?>">

  <figure>
    <?php if (has_post_thumbnail()): $featuredimgurl = get_the_post_thumbnail_url($articles->ID, 'bones-thumb-528'); ?>

      <img src="<?php echo esc_url($featuredimgurl); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>
    <div class="overflow">
      <?php /* ?><a href="<?php echo esc_url($whatsapp_url); ?>" class="btn-asesor" style="background-color:<?php echo esc_attr($taxcolor); ?>">Contactar asesor</a><?php */ ?>
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

<style>
  .card-product.<?php echo 'prod-' . get_the_ID(); ?>:hover figure {
    border-color: <?php echo esc_attr($taxcolor); ?>;
  }

  .card-product.<?php echo 'prod-' . get_the_ID(); ?>:hover h5 {
    color: <?php echo esc_attr($taxcolor); ?>;

  }

  .card-product.<?php echo 'prod-' . get_the_ID(); ?>:hover h5:before {
    color: <?php echo esc_attr($taxcolor); ?>;

  }
</style>