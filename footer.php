<?php
if (!empty($_GET['pjax'])) return;
?>
		</main>
		
		<nav id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<?php echo wp_nav_menu(array(
							'menu'              => 'footer',
							'theme_location'    => 'footer',
							'container'			=> null,
							'items_wrap'			=> '<ul id="%1$s" class="%2$s">
								%3$s
								<div class="menu-toggle menu-open"><i class="fa fa-bars"></i> Menu</div>
								<div class="menu-toggle menu-close"><i class="fa fa-times"></i> Close</div>
								</ul>',
						)) ?>
					</div>
				</div>
			</div>
		</nav>

		<main id="secondary"></main>

		<nav id="utility">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8 social">
						<?php wp_nav_menu(array(
							'menu'              => 'social',
							'theme_location'    => 'social',
							'container'			=> null,
							'walker'			=> new mscw_social_icons()
						))?>
					</div>
				</div>
			</div>
		</nav>
		<?php $latest = current(get_posts(array('numberposts' => 1)))?>
		<?php wp_footer()?>
	</body>
</html>