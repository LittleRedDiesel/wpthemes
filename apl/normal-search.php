
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>'".get_query_var('s')."' appears on the following pages:</h2><ul class='sitewide-seach'>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
      echo '</ul>';
    }else{
?>
</ul>
<div>
  <h2>Nothing Found</h2>
  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
</div>
<?php } ?>
