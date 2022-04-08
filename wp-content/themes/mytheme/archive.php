<?php get_header() ?>
<?php
if( $wp_query->have_posts() ) {
    while( $wp_query->have_posts() ) {
        $wp_query->the_post();
        echo the_title('<h1>','</h1>');
        echo "<p>".the_excerpt()."</p>";
        echo "written by: ".get_the_author();
    }
  }
?>
<?php get_footer() ?>