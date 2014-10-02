	<aside id="sidebar">
					   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
					<div class="menu">
						<h2>Categor&iacute;as</h2>
						<ul>
							 <?php
								 $args = array (
								 'hide_empty' => 0,
								 'title_li' => false,
								 'style' => 'list',
								 );
								 wp_list_categories($args);
								 ?>
						</ul>
					</div>
					<div class="menu">
						<h2>Nube de etiquetas</h2>
						<?php wp_tag_cloud(); ?>
					</div>
					<div class="menu">
						<h2>Otros art&iacute;culos</h2>
							<ul>
							<?php
							query_posts(array('orderby' => 'rand', 'showposts' => 10));
							if (have_posts()) :
							while (have_posts()) : the_post();
							?>
							<li><a href="<?php echo the_permalink(); ?>" title="Enlace Permanente a <?php echo the_title() ?>"><?php echo the_title() ?></a></li>
							<?php endwhile;
							endif; ?>
						</ul>
					</div>
					<div class="menu">
						<h2>Archivo</h2>
							<ul>
							<?php wp_get_archives('type=monthly'); ?>
							</ul>
					</div>
					<div class="menu">
						<h2>Timelne</h2>
						<a class="twitter-timeline" href="https://twitter.com/iblancasa" data-widget-id="505020647471206400">Tweets por @iblancasa</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


					</div>
					<?php endif; ?>
				</aside>
			</section>
			<aside id="desplegable">
				<a class="simple-menu" href="#sidr">Desplegar opciones</a>
			</aside>
			
			<div id="sidr">
			  <ul>
			  	<li><a class="simple-menu" href="#sidr">Cerrar opciones</a></li>
                <li><a href='http://iblancasa.com'>Inicio</a></li>
                <li><a href='http://iblancasa.com/sobre-mi'>Sobre m&iacute;</a></li>
                <li><a href='http://iblancasa.com/webs-amigas'>Webs amigas</a></li>
                <li><a href='http://iblancasa.com/aviso-legal'>Aviso legal</a></li>
			  </ul>
			</div>