<?php
get_header();
?>
<div class="content">
<?php
if( $wp_query->have_posts() ) {
    while( $wp_query->have_posts() ) {
        $wp_query->the_post();
        echo the_title('<h1>','</h1>');
        echo "<p>".the_content()."</p>";
    }
  }?>
  </div>
  <?php
get_footer();
?>
