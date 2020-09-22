<!-- Article Starts -->
<article>
        <a href="<?php the_permalink(); ?>"><h4> <?php the_title(); ?></h4></a>
        <!-- Figure Starts -->
        <figure class="blog-figure">
            <a href="<?php the_permalink(); ?>">
                <img class="responsive-img" src="http://via.placeholder.com/748x364" alt="">
            </a>
        </figure>
        <!-- Figure Ends -->
        <!-- Excerpt Starts -->
        <div class="blog-excerpt">
            <p class="second-font"><?php echo get_the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="col s12 m4 l4 xl4 waves-effect waves-light btn readmore font-weight-700">
                Read more 
            </a>
            <!-- Meta Starts -->
            <div class="meta second-font">
                <span><i class="fa fa-user"></i> <a href="#"><?php echo get_the_author(); ?></a></span>
                <span class="date"><i class="fa fa-calendar"></i> <?php echo get_the_time(); ?></span>
                <span><i class="fa fa-commenting"></i> <a href="<?php the_permalink(); ?>"><?php echo get_comments_number(); ?></a></span>
                <span><i class="fa fa-tags"></i> 
                        <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                echo $tag->name . ', '; 
                            }
                            }
                        ?>
                </span>
                <span class="permalink"><i class="fa fa-link"></i> <a href="<?php the_permalink(); ?>">permalink</a></span>
            </div>
            <!-- Meta Ends -->
        </div>
        <!-- Excerpt Ends -->
    </article>
    <!-- Article Ends -->