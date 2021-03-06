<?php

// Do not edit this file.
// If you need to override this template you can use the 'shoestrap_content_override' hook.
?>
<article <?php post_class(); ?>>
  <?php do_action( 'shoestrap_in_article_top' ); ?>
  <?php if ( !has_action( 'shoestrap_override_header' ) ) : ?>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php
    if ( !has_action( 'shoestrap_entry_meta_override' ) )
      get_template_part('templates/entry-meta');
    else
      do_action( 'shoestrap_entry_meta_override' )
    ?>
    <?php do_action( 'shoestrap_after_entry_meta' ); ?>
  </header>
  <?php else : do_action( 'shoestrap_override_header' ); endif; ?>
  <div class="entry-summary">
    <?php
    if ( !has_action( 'shoestrap_do_the_excerpt' ) )
      the_excerpt();
    else
      do_action( 'shoestrap_do_the_excerpt' );
    ?>
    <div class="clearfix"></div>
  </div>
  <?php
  if ( has_action( 'shoestrap_entry_footer' ) ) :
    echo '<footer class="entry-footer">';
    do_action( 'shoestrap_entry_footer' );
    echo '</footer>';
  endif;
  ?>
  <?php do_action( 'shoestrap_in_article_bottom' ); ?>
</article>