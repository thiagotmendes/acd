<?php get_header() ?>

  <main class="main-site">
    <section class="titulo-interno">
      <div class="container">
        <h1> Blog </h1>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php get_sidebar() ?>
        </div>
        <div class="col-md-9">
          <?php
            if (have_posts()):
              while (have_posts()): the_post();
          ?>
              <article class="bloco-noticia">
                <div class="">
                  <div class="">
                    <a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
                  </div>
                  <div class="">
                    <h2 class="titulo-noticia">
                      <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                      </a>
                    </h2>
                    <div class="conteudo-noticia">
                      <p class="data-noticia"> <?php the_time('j \d\e F \d\e Y') ?> </p>
                      <p> <?php the_excerpt_limit(30) ?> </p>
                    </div>
                    <p align="center"> <a href="<?php the_permalink() ?>" class="btn btn-site"> Saiba mais </a> </p>
                  </div>
                </div>
              </article>
          <?php
              endwhile;
            endif;
          ?>
          <?php wp_pagination() ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer() ?>
