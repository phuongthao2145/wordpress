<?php get_header(); 
get_template_part('banner')?>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php
          $homepageEvents = new WP_Query((array(
            'posts_per_page' => 2,
            'post_type' => 'events',
          )));
          while ($homepageEvents->have_posts()):
            $homepageEvents->the_post();
          ?>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('M');
              ?></span>
              <span class="event-summary__day"><?php echo $eventDate->format('j'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
              <p><?php if(has_excerpt()){
                the_excerpt();}
                else{
                  echo wp_trim_words(get_the_excerpt(),18);
                }
               ?> <a href="<?php the_permalink() ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <?php endwhile; ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('event') ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php
          $homepageBlogs = new WP_Query((array(
            'posts_per_page' => 2,
            'post_type' => 'post',
            'category' => 'blog',
          )));
          while ($homepageBlogs->have_posts()):
            $homepageBlogs->the_post();
          ?>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('M');
              ?></span>
              <span class="event-summary__day"><?php echo $eventDate->format('j'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
              <p><?php if(has_excerpt()){
                the_excerpt();}
                else{
                  echo wp_trim_words(get_the_excerpt(),18);
                }
               ?> <a href="<?php the_permalink() ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <?php endwhile; ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('blog') ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg')?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
    <?php get_footer(); ?>
   