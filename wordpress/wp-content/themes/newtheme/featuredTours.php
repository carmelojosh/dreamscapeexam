<?php if (have_posts()) :
				while (have_posts()) : the_post();

				// the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

                endif; 
                ?>


<div class="featured-tours section">
    <div class="container">
        <h3>Featured Tours</h3>
        <h4>Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and
            already well-known destinations, some of which are listed below.</h4>
        <div class="row">
            <?php
                // Featured posts
               $featuredPosts = new WP_Query('cat=2&posts_per_page=4');

                if ($featuredPosts->have_posts()) :

                    while ($featuredPosts->have_posts()) :$featuredPosts->the_post();
        ?>
            <div class="col-md-3">
                        <!-- post-thumbnail     -->
                        <div class="square-thumbnail">
									<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>">

										<?php } ?>
                                    </div>
                                    
                                    <!-- /post-thumbnail -->
                <h2 class="tour-post-title"><?php the_title(); ?></h2>
                <h6 class="tour-post-subtitle"><?php the_excerpt(); ?></h6>


                <a href="#" class="btn btn-pink"><i class="fa fa-paper-plane-o"></i> &nbsp;Read More</a>
            </div>
            <?php endwhile;
    
                    else :
                        echo '<p>No content found</p>';
    
                    endif;
                    wp_reset_postdata() ;
         ?>
        </div>

    </div>
</div>



