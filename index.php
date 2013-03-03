<?php get_header() ?>

            <div class="row">
                <div id="posts" class="span9">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post">
                        <h1>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <small><?php the_time('n.j.y') ?></small>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        <?php echo $post->comment_count?>
                        <?php echo ($post->comment_count==1?' comment':' comments');?>
                        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                        <a href="<?php the_permalink(); ?>#disqus_thread">
                            <?php echo $post->comment_count?>
                            <?php echo ($post->comment_count==1?' comment':' comments');?>
                        </a>
                    </div>

                    <?php endwhile; else: ?>

                    <p>Sorry, no posts matched your criteria.</p>

                    <?php endif; ?>

                    <div id="nav-below">
                        <?php next_posts_link('<div class="nav-previous">Older</div>') ?>
                        <?php previous_posts_link('<div class="nav-next">Newer</div>') ?>
                    </div>

                </div>
                <div id="sidebar" class="span3">
                    <?php get_sidebar() ?>
                </div>
            </div>

<?php get_footer() ?>
