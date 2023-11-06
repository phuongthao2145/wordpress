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
             <div class="info">
                <span class="cat_name"><?php 
                    $post_type = get_post_type_object( get_post_type($post) ); 
                    ?>
                    <a href="<?php echo site_url('/event'); ?>"><?php echo $post_type->labels->name; ?> </a>
                    <?php
                 ?></span>
                <span class="author"><a href="<?php 
                $author_id  = get_post_field( 'post_author', get_the_ID() );
                echo esc_url( get_author_posts_url( $author_id ) ); ?>"><?php the_author() ?></a></span>
             </div>
             <p> <?php the_content(); ?></p>
            </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>    
<?php get_footer(); ?>