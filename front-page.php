<?php get_header(); ?>
<!-- Banner Desktop -->

<?php
$bannerSection = get_field("banner_section");


if ($bannerSection && $bannerSection['enable_section'] && !empty($bannerSection["banners"])):
	$banners = $bannerSection["banners"]; ?>

	<section class="main-banner-home relative clear-fix">
		<div class="wrapper-main center">
			<div class="banner-home relative">
				<div class="swiper swiper-banner-home">
					<div class="swiper-wrapper">
						<?php foreach ($banners as $banner):
							$image = $banner["image"]; ?>
							<div class="swiper-slide">
								<div class="card-top-banner">
									<?php if ($image): ?>
										<figure>
											<img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["title"]); ?>">
										</figure>
									<?php endif; ?>
									<?php if (!empty($banner["title_one"]) ||  !empty($banner["title_two"]) ||  !empty($banner["description"])): ?>
										<article>
											<?php if (!empty($banner["title_one"]) ||  !empty($banner["title_two"])): ?>

												<h2><span><?php echo esc_html($banner["title_one"]); ?></span><br> <?php echo $banner["title_two"]; ?></h2>
											<?php endif; ?>
											<?php if (!empty($banner["description"])): ?>
												<p><?php echo wp_kses_post($banner["description"]); ?></p>
											<?php endif; ?>
										</article>
									<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-button-next next-home"></div>
				<div class="swiper-button-prev prev-home"></div>
				<div class="swiper-pagination pagination-site pagination-home"></div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
$aboutSection = get_field("about_section");


if ($aboutSection && $aboutSection['enable_section'] && !empty($aboutSection["banners"])):
	$aboutDescription = $aboutSection["description"];
	$banners = $aboutSection["banners"]; ?>

	<section id="quienes-somos" class="main-quienes-somos relative clear-fix">
		<div class="wrapper-main center">
			<?php if (!empty($aboutDescription)): ?>
				<div class="leyengd">
					<?php echo wp_kses_post($aboutDescription); ?>
				</div>
			<?php endif; ?>
			<div class="clr"></div>
			<section class="main-swiper-card clear-fix relative">
				<div class="relative">
					<div class="swiper swiper-cards-somos">
						<div class="swiper-wrapper">
							<?php foreach ($banners as $banner):
								$image = $banner["image"];
								$aboutDescription = $banner["description"]; ?>
								<div class="swiper-slide">
									<article class="card-somos">
										<?php if ($image): ?>
											<figure>
												<img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["title"]); ?>">
											</figure>
										<?php endif; ?>
										<?php if (!empty($aboutDescription)): ?>
											<div class="info">
												<?php echo wp_kses_post($aboutDescription); ?>
											</div>
										<?php endif; ?>
									</article>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="swiper-button-next next-card-somos"></div>
					<div class="swiper-button-prev prev-card-somos"></div>
				</div>
				<div class="swiper-pagination pagination-site pagination-card-somos"></div>
			</section>

		</div>
	</section>
<?php endif; ?>
<?php
$teams = get_field("team_section");


if ($teams && $teams['enable_section'] && !empty($teams["peoples"])):
	$peoples = $teams["peoples"];
?>
	<section id="" class="main-teams relative clear-fix">
		<div class="wrapper-main center">
			<div class="main-carrousel-teams relative">
				<div class="swiper swiper-cards-teams">
					<div class="swiper-wrapper">
						<?php foreach ($peoples as $people):
							$image = $people["image"];
							$peopleDescription = $people["description"]; ?>
							<div class="swiper-slide">
								<article class="card-teams">
									<?php if ($image): ?>
										<figure>
											<img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["title"]); ?>">
										</figure>
									<?php endif; ?>
									<?php if (!empty($peopleDescription)): ?>

										<div class="info">

											<?php echo wp_kses_post($peopleDescription); ?>

										</div>
									<?php endif; ?>
								</article>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-pagination pagination-site pagination-card-teams"></div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
$categories = get_field("categories_section");


if ($categories && $categories['enable_section'] && !empty($categories["choice_categories"])):
	$choiceCategories = $categories["choice_categories"];

?>
	<section id="portafolio" class="relative clear-fix">
		<div class="wrapper-main center">
			<div class="main-portafolio">
				<?php if (!empty($categories["litle_title"])): ?>
					<h2><?php echo esc_html($categories["litle_title"]); ?></h2>
				<?php endif; ?>
				<?php if (!empty($categories["big_title"])): ?>

					<h3><?php echo wp_kses_post($categories["big_title"]); ?></h3>
				<?php endif; ?>

				<div class="grid-portafolio">
					<?php foreach ($choiceCategories as $category):
						$taxcolor = get_field("tax_color", "term_" . $category->term_id);
						$taxicon  = get_field("tax_icon", "term_" . $category->term_id);
						$taximage  = get_field("tax_image", "term_" . $category->term_id); ?>
						<article class="card-portafolio vida" style="background-color:<?php echo esc_attr($taxcolor); ?>">
							<figure>
								<img src="<?php echo esc_url($taximage["url"]); ?>" alt="">
							</figure>
							<div class="info">
								<h4>
									<i><img src="<?php echo esc_url($taxicon["url"]); ?>" alt="<?php echo esc_attr($taxicon["title"]); ?>"></i>
									<span> <?php echo esc_html($category->name); ?></span>
								</h4>
								<p><?php echo wp_kses_post($category->description); ?></p>

								<a href="<?php echo site_url("portafolio?filter=estilo-de-vida"); ?>" class="btn-more">Ver productos</a>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
$clients = get_field("clients_section");


if ($clients && $clients['enable_section']):


?>
	<section id="clientes" class="main-clientes relative clear-fix">
		<div class="wrapper-main center">
			<div class="leyengd">
				<?php if (!empty($clients["litle_title"])): ?>
					<h2><?php echo esc_html($clients["litle_title"]); ?></h2>
				<?php endif; ?>
				<?php if (!empty($clients["description"])) {

					echo wp_kses_post($clients["description"]);
				} ?>
				<?php if (!empty($clients["description_desc"])) : ?>

					<div class="display">
						<?php echo wp_kses_post($clients["description_desc"]); ?>
					</div>
				<?php endif; ?>
				<?php if (!empty($clients["title_brand"])): ?>
					<h4><?php echo esc_html($clients["title_brand"]); ?></h4>
				<?php endif; ?>
			</div>
			<div class="clr"></div>
			<?php if (!empty($clients["brands"])):
				$brands = $clients["brands"]; ?>
				<div class="relative main-slide-brands">
					<div class="swiper swiper-brand">
						<div class="swiper-wrapper">
							<?php foreach ($brands as $brand):
								$brandImage = $brand["brand_image"]; ?>
								<div class="swiper-slide">
									<article class="card-brand">
										<figure>
											<img src="<?php echo esc_url($brandImage["url"]); ?>" alt="<?php echo esc_attr($brandImage["title"]); ?>">
										</figure>
									</article>
								</div>
							<?php endforeach; ?>

						</div>
					</div>
					<!-- <div class="swiper-pagination pagination-site pagination-card-brand"></div>	 -->
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
<?php
$allies = get_field("allies_section");


if ($allies && $allies['enable_section']):


?>
	<section id="aliados" class="main-aliados relative clear-fix">
		<div class="wrapper-main center">
			<div class="oppen-alidos" style="background: #c6ebe2 url('<?php echo esc_url($allies['back_image']['url']); ?>') no-repeat top center; background-size: contain;">
				<?php if (!empty($allies["litle_title"])): ?>
					<h2><?php echo esc_html($clients["litle_title"]); ?></h2>
				<?php endif; ?>
				<?php if (!empty($allies["description"])) {

					echo wp_kses_post($allies["description"]);
				} ?>
				<?php if (!empty($allies["description_desc"])) : ?>

					<div class="display">
						<?php echo wp_kses_post($allies["description_desc"]); ?>
					</div>
				<?php endif; ?>
				<?php if (!empty($allies["title_brand"])): ?>

					<h3><?php echo esc_html($allies["title_brand"]); ?></h3>
				<?php endif; ?>
				<?php if (!empty($allies["brands"])): $brands = $allies["brands"]; ?>

					<div class="brand-aliados">
						<?php foreach ($brands as $brand):
							$brandImage = $brand["brand_image"]; ?>
							<figure>
								<img src="<?php echo esc_url($brandImage["url"]); ?>" alt="<?php echo esc_attr($brandImage["title"]); ?>">
							</figure>
						<?php endforeach; ?>

					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
$cases = get_field("cases_section");


if ($cases && $cases['enable_section'] && !empty($cases["items"])):
	$items = $cases["items"];

?>
	<section id="casos-exito" class="main-casos relative clear-fix">
		<div class="wrapper-main center">
			<?php if (!empty($cases["section_title"])): ?>
				<h2><?php echo esc_html($cases["section_title"]); ?></h2>
			<?php endif; ?>
			<section class="main-tabs-exitos">
				<ul class="nav nav-pills" id="pills-tab" role="tablist">
					<?php foreach ($items as $index => $item): ?>
						<li class="nav-item">
							<div class="items-tabs <?php echo ($index === 0) ? 'active' : null; ?>" id="username-<?php echo $index; ?>-tab" data-bs-toggle="pill" data-bs-target="#username-<?php echo $index; ?>" type="button" role="tab" aria-controls="username-<?php echo $index; ?>" aria-selected="<?php echo ($index === 0) ? 'true' : 'false'; ?>"><?php echo esc_html($item["item_title"]); ?></div>
						</li>
					<?php endforeach; ?>
					<!-- <li class="nav-item">
						<div class="items-tabs active" id="santiago-tab" data-bs-toggle="pill" data-bs-target="#santiago" type="button" role="tab" aria-controls="santiago" aria-selected="true">Santiago Loaiza lalinde Comfama</div>
					</li>
						<li class="nav-item">
						<div class="items-tabs" id="juan-tab" data-bs-toggle="pill" data-bs-target="#juan" type="button" role="tab" aria-controls="juan" aria-selected="false">Juan Camilo Mendoza Nubia by toral</div>
					</li>
					<li class="nav-item">
						<div class="items-tabs" id="jannet-tab" data-bs-toggle="pill" data-bs-target="#jannet" type="button" role="tab" aria-controls="jannet" aria-selected="false">Jannet alzate Constructora serving</div>
					</li> -->
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<?php foreach ($items as $index => $item):
						$itemimage = $item["info_image"];
						$itemImageAuthor = $item["info_image_author"];
					?>

						<div class="tab-pane fade  <?php echo ($index === 0) ? 'show active' : null; ?>" id="username-<?php echo $index; ?>" role="tabpanel" aria-labelledby="username-<?php echo $index; ?>-tab" tabindex="0">
							<article class="card-extios">
								<figure>
									<img src="<?php echo esc_url($itemimage["url"]); ?>" alt="<?php echo esc_attr($itemimage["title"]); ?>">
								</figure>
								<div class="info">
									<?php if (!empty($item["description"])): ?>
										<p><?php echo wp_kses_post($item["description"]); ?></p>
									<?php endif; ?>
									<div class="avatar">
										<i>
											<img src="<?php echo esc_url($itemImageAuthor["url"]); ?>" alt="<?php echo esc_attr($itemImageAuthor["title"]); ?>">
										</i>
										<?php if (!empty($item["author_name"])): ?>
											<h6><?php echo esc_html($item["author_name"]); ?></h6>
										<?php endif; ?>
									</div>
								</div>
							</article>
						</div>
					<?php endforeach; ?>
					<!-- 	<div class="tab-pane fade show active" id="santiago" role="tabpanel" aria-labelledby="santiago-tab" tabindex="0">
						<article class="card-extios">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-1.jpg" alt="">
							</figure>
							<div class="info">
								<p>“Oppen se ha consolidado como un aliado estratégico para La caja de comensación en el fortalecimiento de nuestra oferta corporativa. Su versatilidad, agilidad y compromiso con la calidad se reflejan en cada servicio y producto que nos brindan, aportando valor y confianza en cada entrega”</p>
								<div class="avatar">
									<i>
										<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-1-avatar.png" alt="">
									</i>
									<h6>Santiago Loaiza lalinde Comfama</h6>
								</div>
							</div>
						</article>
					</div>
					<div class="tab-pane fade" id="juan" role="tabpanel" aria-labelledby="juan-tab" tabindex="0">
						<article class="card-extios">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-2.jpg" alt="">
							</figure>
							<div class="info">
								<p>“Oppen Colombia sigue marcando la diferencia con su compromiso, calidad y trabajo responsable. ¡Un gran ejemplo de mejora continua!”</p>
								<div class="avatar">
									<i>
										<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-2-avatar.png" alt="">
									</i>
									<h6>Juan Camilo Mendoza Nubia by toral</h6>
								</div>
							</div>
						</article>
					</div>
					<div class="tab-pane fade" id="jannet" role="tabpanel" aria-labelledby="jannet-tab" tabindex="0">
						<article class="card-extios">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-1.jpg" alt="">
							</figure>
							<div class="info">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eaque, laborum ipsam illum nam doloremque! Quo illo, aspernatur sequi recusandae aperiam magnam quidem quod beatae earum fugit iste animi pariatur.</p>
								<div class="avatar">
									<i>
										<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/caso-1-avatar.png" alt="">
									</i>
									<h6>Jannet alzate Constructora serving</h6>
								</div>
							</div>
						</article>
					</div> -->
				</div>
			</section>









		</div>
	</section>
<?php endif; ?>
<?php
$form = get_field("form_section");

if ($form  && $form['enable_section'] && !empty($form['form']) || $form && $form['enable_section'] && !empty($form['section_title']) || !empty($form['description'])):
	$contactChoice = $form['choice_form'];
	$contactInfo = $form['contact_info'];

?>
	<section id="contacto" class="main-contacto relative clear-fix">
		<div class="wrapper-main center">
			<div class="grid-contacto">
				<arcicle class="card-contacto">

					<?php if (!empty($form['section_title']) || !empty($form['description'])): ?>
						<div class="top-contacto">
							<?php if (!empty($form['section_title'])) : ?>
								<h3><?php echo esc_html($form['section_title']); ?></h3>
							<?php endif; ?>
							<?php if (!empty($form['description'])) {
								echo wp_kses_post($form['description']);
							}; ?>
							<?php if (!empty($form['info'])) : ?>
								<h5><?php echo $form['info']; ?></h5>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php if (!empty($contactInfo)): ?>
						<div class="info">

							<ul>
								<?php foreach ($contactInfo as $contactInfo):
									$choice = ["choie_info"];
									if ($choice == "whatsaap "): ?>
										<li class="icon-ws">Whats app business <a href="<?php echo esc_url($contact['whatsapp']['url']); ?>" target="<?php echo ($contact['whatsapp']['target']) ? esc_html($contact['whatsapp']['target']) : '_self'; ?>"><?php echo esc_html($contact['whatsapp']['title']); ?></a> </li>
									<?php endif; ?>

								<?php endforeach; ?>

								<!-- 	<li class="icon-ws">Whats app business <a href="https://wa.me/+573218033728" target="_blank">+57 3218033728</a> </li>
							<li class="icon-dir">Calle 36 aa sur b 99 envigado antioquia colombia</li>
							<li class="icon-mail"><a href="mailto:Comercialoppen1@gmail.com" target="_blank">Comercialoppen1@gmail.com</a> <br> <a href="mailto:oppencolombia@gmail.com" target="_blank">oppencolombia@gmail.com</a></li> -->
							</ul>
						</div>
					<?php endif; ?>
				</arcicle>
				<?php
				if ($form && !empty($form['choice_form'])):

				?>
					<div class="main-form">
						<?php /*** Form */
						echo do_shortcode(sprintf('[contact-form-7 id="%1$s" title="%2$s"]', $contactChoice->ID, $contactChoice->post_title));
						?>

					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php endif; ?>
<?php get_footer(); ?>