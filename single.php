<?php get_header(); ?>
 
    <section id="cuerpo">
                <section id="articulos">
                     <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <article class="post">
                        <div class="tituloPost"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></div>
                        <h2 class="fecha"><?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> </h2>
                        
                        <?php the_content(); ?>
                    </article>
                      <?php endwhile; else: ?>
                      <p><?php _e('No hay entradas .'); ?></p>
                      <?php endif; ?>
                      <section id="comments">
                        <p><a href="">No se puede comentar, ¿por qu&eacute;?</a></p>
                      </section>
                </section>
 
    <?php  get_sidebar()?>
 
 
  <?php get_footer(); ?>

