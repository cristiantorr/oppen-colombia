<?php get_header(); ?>

<?php

$productsCat = get_terms(array(
	'taxonomy'   => 'products_cat',
	'hide_empty' => false,
));
?>
<section class="banner-campanas relative clear-fix">
	<div class="swiper swiper-banner-campanas">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/banner-camapanas.jpg" alt="">
				</figure>
			</div>
		</div>
	</div>
</section>

<section id="portafolio" class="main-producto-general relative clear-fix">
	<div class="wrapper-main center">
		<div class="main-portafolio-gral">
			<h1>Portafolio</h1>
			<h3>Soluciones para tus planes <br>de beneficios</h3>
			<div class="grid-portafolio-filtro">
				<?php if (!empty($productsCat) && !is_wp_error($productsCat)): $category = wp_list_pluck($productsCat, 'name'); ?>

					<aside>
						<div class="filter-oppen">
							<ul>
								<?php foreach ($productsCat as $product):
									$taxcolor = get_field("tax_color", "term_" . $product->term_id);
									$taxicon  = get_field("tax_icon", "term_" . $product->term_id);

								?>
									<li id="" class="category-vida" data-filter="<?php echo  esc_attr($product->slug); ?> ">
										<label for="vida">
											<input type="checkbox" id="<?php echo  esc_attr($product->slug); ?>" name="<?php echo  esc_attr($product->slug); ?>">
											<h6 style="background-color:<?php echo esc_attr($taxcolor); ?>">
												<i>
													<img src="<?php echo esc_url($taxicon["url"]); ?>" alt="">
												</i>
												<span><?php echo  esc_html($product->name); ?></span>
											</h6>
										</label>
									</li>
								<?php endforeach; ?>
								<!-- <li id="" class="category-vida">
								<label for="vida">
									<input type="checkbox" id="vida" name="vida">
									<h6>
										<i>
											<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/icon-1.png" alt="">
										</i>
										<span>Estilo de vida</span>
									</h6>
								</label>
							</li>
							<li id="" class="category-desarrollo">
								<label for="desarrollo">
									<input type="checkbox" id="desarrollo" name="desarrollo">
									<h6>
										<i>
											<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/icon-2.png" alt="">
										</i>
										<span>Desarrollo</span>
									</h6>
								</label>
							</li>
							<li id="" class="category-bienestar">
								<label for="bienestar">
									<input type="checkbox" id="bienestar" name="bienestar">
									<h6>
										<i>
											<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/icon-3.png" alt="">
										</i>
										<span>Bienestar</span>
									</h6>
								</label>
							</li>
							<li id="" class="category-entretenimiento">
								<label for="entretenimiento">
									<input type="checkbox" id="entretenimiento" name="entretenimiento">
									<h6>
										<i>
											<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/icon-4.png" alt="">
										</i>
										<span>Entretenimiento</span>
									</h6>
								</label>
							</li> -->
							</ul>
						</div>
					</aside>
				<?php endif; ?>
				<section class="products-portafolio">
					<div class="search-product">
						<input type="search" id="search" name="search" value="" placeholder="Busca en Oppen Colombia">
						<button type="submit" id="search-submit">Search</button>
					</div>
					<!-- 	<div class="grid-card-gategory"> -->
					<!-- 	<article class="card-product category-vida">
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
						<article class="card-product category-entretenimiento">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-2.jpg" alt=""> 
								<div class="overflow">
									<a href="" class="btn-asesor">Contactar asesor</a>
									<div class="details">
										<a href="" class="btn-product">Ver producto</a>
										<h4>Audífonos plásticos con partes de bambú.</h4>
									</div>
								</div>
							</figure>
							<div class="info">
								<h5>Entretenimiento</h5>
								<h6>Audifonos Inalámbricos</h6>
							</div>
						</article>
						<article class="card-product category-bienestar">
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
								<h5>Bienestar</h5>
								<h6>Bafle Mini Bluetooth Zip Cork</h6>
							</div>
						</article>
						<article class="card-product category-desarrollo">
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
								<h5>Desarrollo</h5>
								<h6>Bafle Mini Bluetooth Zip Cork</h6>
							</div>
						</article>
						<article class="card-product category-bienestar">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-5.jpg" alt=""> 
								<div class="overflow">
									<a href="" class="btn-asesor">Contactar asesor</a>
									<div class="details">
										<a href="" class="btn-product">Ver producto</a>
										<h4>Bafle Mini Bluetooth Zip Cork</h4>
									</div>
								</div>
							</figure>
							<div class="info">
								<h5>Bienestar</h5>
								<h6>Bafle Mini Bluetooth Zip Cork</h6>
							</div>
						</article>
						<article class="card-product category-vida">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-6.jpg" alt=""> 
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
						</article> -->
					<?php echo do_shortcode('[ajax_load_more 
    id="alm-products"
    post_type="products"
    taxonomy="products_cat"
    taxonomy_terms=""
    taxonomy_operator="IN"
    search=""
    theme_repeater="products.php"
    container_type="div"
    css_classes="grid-card-gategory"
    posts_per_page="6"
    scroll="false"
    transition="fade"
    button_label="Cargar más artículos"
    no_results_text="<div class=\'no-results\'>No se encontraron productos</div>"
  ]'); ?>
				</section>
			</div>
		</div>
	</div>
</section>


<section class="main-products-relacionados relative clear-fix">
	<div class="wrapper-main center">
		<h2>Los más vistos</h2>
		<div class="relative">
			<div class="swiper swiper-relacionados">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
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
										<h4>Audífonos plásticos con partes de bambú.</h4>
									</div>
								</div>
							</figure>
							<div class="info">
								<h5>Entretenimiento</h5>
								<h6>Audifonos Inalámbricos</h6>
							</div>
						</article>
					</div>
					<div class="swiper-slide">
						<article class="card-product category-vida">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-6.jpg" alt="">
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
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/producto-5.jpg" alt="">
								<div class="overflow">
									<a href="" class="btn-asesor">Contactar asesor</a>
									<div class="details">
										<a href="" class="btn-product">Ver producto</a>
										<h4>Audífonos plásticos con partes de bambú.</h4>
									</div>
								</div>
							</figure>
							<div class="info">
								<h5>Entretenimiento</h5>
								<h6>Audifonos Inalámbricos</h6>
							</div>
						</article>
					</div>
					<div class="swiper-slide">
						<article class="card-product category-desarrollo">
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
								<h5>Desarrollo</h5>
								<h6>Bafle Mini Bluetooth Zip Cork</h6>
							</div>
						</article>
					</div>
				</div>
			</div>
			<div class="swiper-button-next next-relacionados"></div>
			<div class="swiper-button-prev prev-relacionados"></div>
			<div class="swiper-pagination pagination-site pagination-relacionados"></div>
		</div>


	</div>

</section>




<?php get_footer(); ?>