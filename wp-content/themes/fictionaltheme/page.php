<?php get_header(); get_template_part('banner')?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            while(have_posts()):
                the_post();
            ?>
            <article>
             <h2><?php the_title(); ?></h2>
             <p> <?php the_content(); ?></p>
            </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>    
<?php get_footer(); ?>