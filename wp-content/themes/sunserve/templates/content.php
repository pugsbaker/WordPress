<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-container">

      <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>

      <!-- grab post thumb -->
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="row">
          <div class="span2">
            <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>">         
              <?php echo get_the_post_thumbnail($id, 'thumbnail'); ?> 
            </a>
          </div>
          <div class="span6">
            <div class="entry-content"> 
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      <?php } ?>
      
      <footer>
        <?php get_template_part('templates/entry-meta'); ?>
      </footer>
    
    </div>
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php endif; ?>
