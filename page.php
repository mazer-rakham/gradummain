<?php

 get_header( 'secondary');
 
  ?>

<div class="container">
  <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
    <header>
      <h1 class="entry-title main_pages_header_background">
        <?php the_title(); ?>
      </h1>
    </header>
    <div class="main_pages_content_background col-xs-12">
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
