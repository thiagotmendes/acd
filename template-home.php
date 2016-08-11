<?php /* template name: Home */ ?>
<?php get_header() ?>

    <section class="banner">
      <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive"/>
    </section>

    <section class="conteudo">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 align="center"><span class="titulo-home">A Academia</span></h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ligula felis, molestie eget ligula eu, faucibus porttitor tellus.
              Duis luctus ipsum eget eleifend porttitor. Sed tellus nulla, rhoncus nec massa vitae, tincidunt scelerisque turpis.
              Suspendisse a rhoncus turpis. Donec ligula nunc, pharetra ac vulputate nec, vestibulum et tortor.
              Fusce ex mauris, facilisis eu lacus quis, malesuada ullamcorper turpis.
              Vivamus condimentum erat vitae tellus vulputate, sed imperdiet elit pellentesque.
              Curabitur vitae orci consequat, sodales urna vel, sodales mauris. Aenean feugiat porttitor nisl et consectetur.
            </p>
          </div>
          <div class="col-md-6">
            <h2 align="center"><span class="titulo-home">Membros</span></h2>
            <p align="center"><img src="<?php echo get_template_directory_uri() ?>/images/foto.jpg" alt="" class="img-responsive img-membros"/></p>
          </div>
        </div>
      </div>
    </section>

    <section class="noticia">
      <div class="container">
        <h2 align="center"><span class="titulo-home">Últimas Notícias</span></h2>
        <div class="row reseta-row">
          <?php
          $argPost = array(
            'post_type'       => 'post',
            'posts_per_page'  => 3
          );
          $postHome = new wp_query($argPost);
          if($postHome->have_posts()):
            while($postHome->have_posts()): $postHome->the_post();
            ?>
              <div class="col-md-4">
                <div class="noticia-home">
                  <?php if (has_post_thumbnail()): ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                  <?php endif; ?>
                  <h2 class="titulo-noticia"> <?php the_title() ?> </h2>
                  <p class="previa-home">
                    <?php the_excerpt_limit(30) ?>
                  </p>
                  <p align="center">
                    <a href="<?php the_permalink() ?>" class="btn-noticia-home">Ver Mais <img src="<?php echo get_template_directory_uri() ?>/images/mais.png" alt="" /></a>
                  </p>
                </div>
              </div>
            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
<?php get_footer() ?>
