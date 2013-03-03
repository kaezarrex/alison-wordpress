<?php get_header() ?>

            <div class="row">

                <div id="posts" class="span9">

                    <div id="nav-above">
                        <h1 class="page-title">
                        <?php if ( is_day() ) : ?>
                            <?php printf('Daily Archives: <span>%s</span>', get_the_time(get_option('date_format')) ) ?>
                        <?php elseif ( is_month() ) : ?>
                            <?php printf('Monthly Archives: <span>%s</span>', get_the_time('F Y') ) ?>
                        <?php elseif ( is_year() ) : ?>
                            <?php printf('Yearly Archives: <span>%s</span>', get_the_time('Y') ) ?>
                        <?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
                            Blog Archives
                        <?php endif; ?>
                        </h1>
                        <?php next_posts_link('<div class="nav-previous">Older</div>') ?>
                        <?php previous_posts_link('<div class="nav-next">Newer</div>') ?>
                    </div>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post">
                        <h1>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <small><?php the_time('n.j.y') ?></small>
                        <div class="entry">
                            <?php the_excerpt() ?>
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
