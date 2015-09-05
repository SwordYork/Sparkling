<?php
/*
Template Name: allposts
*/
get_header(); ?>
<?php
$debut = 0; //The first article to be displayed
?>
<div class="primary" id="primary">
<article id="post-<?php the_ID(); ?> article" <?php post_class(); ?>>

                                        <header class="post-header">
                                                <h1 class="post-title"><?php the_title(); ?></h1>
                                        </header><!--post-header-->
                                        <div class="post-content">



<?php
wp_reset_query();
query_posts( array( 'posts_per_page' => -1, 'post_status' => 'publish' ) );
  echo '<ul>';
  while( have_posts() ):
the_post();
 echo '<li>';
        the_time('Y/m/d');
 echo '&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<a href="';
    the_permalink();
    echo '">';
    the_title();
    echo '</a></li>';
  endwhile;
  echo '</ul>';
wp_reset_query();
?>
  </div><!--.post-content-->
                                        <?php edit_post_link( __( '<i class="icon-pencil">Edit</i>', 'fixy' ), '<span class="edit-link">', '</span>' ); ?>
                                </article><!--Article-->
                </div><!--.primary-->
<?php get_footer(); ?>
