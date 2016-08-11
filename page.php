<?php get_header() ?>

  <main class="main-site">
    <section class="titulo-interno">
      <div class="container">
        <h1> <?php the_title() ?> </h1>
      </div>
    </section>
    <div class="container">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
          <?php the_content() ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <h1>  </h1>
    </div>
  </main>

<?php get_footer() ?>
