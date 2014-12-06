<?php if($GLOBALS['corpo_loop']['query']->have_posts()) : ?>
                <?php global $post; ?>
                <h3><?php esc_html_e($GLOBALS['corpo_loop']['title']); ?></h3>

                <ul class="projects-slider">
                
                <?php 
                $counter = 1;
                
                while($GLOBALS['corpo_loop']['query']->have_posts()) : $GLOBALS['corpo_loop']['query']->the_post();
                ?>
                    
                    <li class="project one-fourth<?php if( $counter%4 == 0 ) { echo " last"; } ?>">
                        <a href="<?php the_permalink(); ?>" class="portfolio-item">
                        <div class="proj-thumb">
                        
                            <?php 
                                if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
                                    the_post_thumbnail('portfolio-one-third'); 
                                } else { ?>
                                    <img src="<?php echo CORPO_TOOLKIT_URL; ?>images/project-thumb-placeholder.png" alt="" />
                            <?php } ?>

                            <span class="image-overlay"></span>
                        </div>
                        <div class="proj-description">
                            <h5><?php the_title(); ?></h5>
                            <?php $terms = wp_get_object_terms ( $post->ID, 'corpo_services' ); ?>
                            <i><?php if( $terms ) { echo $terms[0]->name; } ?></i>
                        </div>
                        </a>
                    </li>                
                    <?php $counter++; ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
                <?php endif; ?>