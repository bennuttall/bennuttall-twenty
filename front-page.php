<?php get_header(); ?>

<?php the_post(); ?>

<div class="entry-content">
  <?php the_content(); ?>

  <div class="me-elsewhere">
    <a href="https://bbcnewslabs.co.uk/"><img src="<?php bloginfo('template_url'); ?>/images/bbcnewslabs.png" /></a>
    <a href="https://github.com/bennuttall"><img src="<?php bloginfo('template_url'); ?>/images/github.jpg" /></a>
    <a href="https://twitter.com/ben_nuttall"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></a>
    <a href="https://opensource.com/user_articles/26767/26767"><img src="<?php bloginfo('template_url'); ?>/images/opensource.com.png" /></a>
  </div>

  <div class="latest-posts">
    <h2>Latest blog posts</h2>

    <?php

    $args = [
      'posts_per_page' => 4,
    ];

    $latest = new WP_Query($args);

    while ($latest->have_posts()): $latest->the_post(); ?>

      <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <div class="featured-image">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>

        <div class="post-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>

      <?php endwhile; wp_reset_postdata(); ?>

      <p class="more"><a href="/blog/">See more</a></p>
    </div>

    <div class="latest-other">
      <h2>More of my content from elsewhere</h2>

      <?php $other_posts = get_field('elsewhere_posts'); ?>

      <ul>
      <?php foreach ($other_posts as $post): ?>
        <li><strong><a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a></strong> [<?php echo $post['site']; ?></a>]</li>
      <?php endforeach; ?>
      </ul>
    </div>
</div>

<?php get_footer();
