<?php get_header() ?>

            <div class="row">

                <div id="posts" class="span9">

                    <div id="nav-above">
                        <h1 class="page-title">
                        Category: <?php single_cat_title() ?>
                        </h1>
                        <div id="nav-above-links">
                            <?php next_posts_link('<div class="nav-previous">Older</div>') ?>
                            <?php previous_posts_link('<div class="nav-next">Newer</div>') ?>
                        </div>
                    </div>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post">
                        <h1 class="post-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <div class="post-date">
                            <small><?php the_time('n.j.y') ?></small>
                        </div>
                        <div class="entry">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post-meta">
                            <a href="<?php the_permalink(); ?>#disqus_thread" class="comment-count">
                                <?php echo $post->comment_count?>
                                <?php echo ($post->comment_count==1?' comment':' comments');?>
                            </a>
                        </div>
                    </div>

                    <?php endwhile; else: ?>

                    <div class="post">
                        <p>Sorry, no posts matched your criteria.</p>
                    </div>

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
