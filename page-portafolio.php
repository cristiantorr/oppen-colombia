<?php get_header(); ?>
<section class="banner-campanas relative clear-fix">
	<div class="swiper swiper-banner-campanas">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
	        	<figure>
					<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/banner-camapanas.jpg" alt=""> 
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
				<aside>
					<div class="filter-oppen">
						<ul>
							<li id="" class="category-vida">
								<label for="vida">
									<input type="checkbox" id="vida" name="vida">
									<h6>
										<i>
											<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/icon-1.png" alt=""> 
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
											<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/icon-2.png" alt=""> 
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
											<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/icon-3.png" alt=""> 
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
											<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/icon-4.png" alt=""> 
										</i>
										<span>Entretenimiento</span>
									</h6>
								</label>
							</li>
						</ul>
					</div>
				</aside>
				<section class="products-portafolio">
					<div class="search-product">
						<input type="search" id="s" name="s" value="" placeholder="Busca en Oppen Colombia">
    					<button type="submit" id="">Search</button>
					</div>
					<div class="grid-card-gategory">
						<article class="card-product category-vida">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-1.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-2.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-3.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-4.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-5.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-6.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-1.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-2.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-6.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-5.jpg" alt=""> 
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
								<img src="<?php echo get_stylesheet_directory_uri(). '/library/' ?>images/producto-4.jpg" alt=""> 
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
