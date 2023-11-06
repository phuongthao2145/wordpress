<?php get_header(); get_template_part('banner')?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            while(have_posts()):
                the_post();
            ?>
            <article>
             <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
             <p> <?php the_excerpt(); ?></p>
            </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>    
<?php get_footer(); ?>