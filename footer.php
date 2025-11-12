			<footer class="full">
				<div class="wrapper-main center">
					<div class="ft-oppen flex flex-center">
						<?php $logoSecond = get_field('logo_second', 'option');

						?>
						<figure class="logo">
							<img src="<?php echo ($logoSecond)
													? esc_url($logoSecond["url"])
													: get_stylesheet_directory_uri() . '/library/images/logo-oppen-colombia-2.png'; ?>" alt="logo footer">
						</figure>
						<!-- <ul>
							<li><a href="#servicio-cliente" class="titulo">SERVICIO AL CLIENTE</a></li>
							<li><a href="#informacion" class="titulo">INFORMACIÓN</a></li>
							<li><a href="#nosotros">Nosotros</a></li>
							<li><a href="#preguntas-frecuentes">Preguntas frecuentes</a></li>
							<li><a href="#politicas-sitio">Políticas del sitio</a></li>
							<li><a href="#contacto">Contáctanos</a></li>
						</ul> -->
						<?php if (has_nav_menu('footer-nav')): ?>

							<?php wp_nav_menu(array(
								'theme_location' => 'footer-nav',
								'menu_class' => false,
								'container' => '',
								'container_class' => '',
								'items_wrap' => '<ul id="%1s" class="%2s">%3$s</ul>',
							)); ?>

						<?php endif; ?>
					</div>
					<div class="clr"></div>
					<?php $copyright = get_field('copyright', 'option'); ?>
					<p>© <?php echo date("Y"); ?>, <?php echo (!empty($copyright)) ? esc_html($copyright) : "Oppen Colombia. Diseño de páginas Web por FLOW DIGITAL"; ?></p>
				</div>
			</footer>

			<div class="btn-fixed">
				<div class="ws">
					<a href="https://wa.me/+573218033728" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/ws.png" alt="">
					</a>
				</div>
			</div>


			<?php // all js scripts are loaded in library/bones.php 
			?>
			<?php wp_footer(); ?>

			<script>
				Fancybox.bind("[data-fancybox]", {});
			</script>

			</body>

			</html> <!-- end of site. what a ride! -->