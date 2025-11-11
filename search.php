<?php get_header(); ?>

<div class="container my-5">
  <h1 class="mb-4">Resultados de búsqueda: "<?php echo get_search_query(); ?>"</h1>

  <?php if ( have_posts() ) : ?>
    <div class="row g-4">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm border-0">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text text-muted mb-4">
                <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-auto" style="background: #8d5394;border: none;">Ver más</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="mt-5">
      <?php the_posts_pagination(); ?>
    </div>

  <?php else : ?>
    <p>No se encontraron resultados para tu búsqueda.</p>
  <?php endif; ?>

 
  <div class="text-center mt-5">
    <a href="<?php echo home_url('/'); ?>" class="btn btn-primary mx-2" style="background: #e8ddea;border: none;color: #000000;">Ir al Home</a>
    <a href="<?php echo home_url('/portafolio'); ?>" class="btn btn-primary mx-2" style="background: #ff7800;border: none;">Ir al Portafolio</a>
  </div>
</div>

<?php get_footer(); ?>

