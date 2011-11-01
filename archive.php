<?php get_header() ?>

    <div id="content">

<?php get_sidebar() ?>

<?php the_post() ?>

<?php if ( is_day() ) : ?>
        <h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'sandbox' ), get_the_time(get_option('date_format')) ) ?></h1>
<?php elseif ( is_month() ) : ?>
        <h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'sandbox' ), get_the_time('F Y') ) ?></h1>
<?php elseif ( is_year() ) : ?>
        <h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'sandbox' ), get_the_time('Y') ) ?></h1>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
        <h1 class="page-title"><?php _e( 'Blog Archives', 'sandbox' ) ?></h1>
<?php endif; ?>

<?php rewind_posts() ?>

            <section id="nav-above" class="navigation">
                <?php next_posts_link( '%link', '<div class="nav-previous">%title</div>' ) ?>
                <?php previous_posts_link( '%link', '<div class="nav-next">%title</div>' ) ?>
            </section>

            <section id="posts">

<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                    <header>
                        <div class="date">
                            <span class="badge"><?php the_time('j') ?></span>
                            <span class="month"><?php the_time('M') ?> &#8211; <?php the_time() ?></span>
                        </div>
                        <h1>
                            <a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </h1>
                    </header>
                    <section>
                        <?php the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>
                    </section>
                    <footer>
                        <section>
                            <h2>
                                <?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?>
                            </h2>
                        </section>
                        <div class="slash"></div>
                        <section>
                            <h2>Categories</h2>
                            <h3><?php echo(get_the_category_list(', ')) ?></h3>
                        </section>
                        <div class="slash"></div>
                        <section>
                            <h2>Author</h2>
                            <h3><?php echo(get_the_author()) ?></h3>
                        </section>
                    </footer>
                </article><!-- .post -->

<?php endwhile; ?>

            </section>

            <section id="nav-above" class="navigation">
                <?php next_posts_link( '%link', '<div class="nav-previous">%title</div>' ) ?>
                <?php previous_posts_link( '%link', '<div class="nav-next">%title</div>' ) ?>
            </section>

    </div><!-- #content .hfeed -->

<?php get_sidebar() ?>
<?php get_footer() ?>
