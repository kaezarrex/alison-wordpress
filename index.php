    <?php get_header() ?>

        <div id="content">

            <?php get_sidebar() ?>

            <section id="main-nav-above" class="navigation">
                <?php next_posts_link(__( '<div class="nav-previous">Older</div>', 'sandbox' )) ?>
                <?php previous_posts_link(__( '<div class="nav-next">Newer</div>', 'sandbox' )) ?>
            </section>

            <section id="posts">

            <?php while ( have_posts() ) : the_post() ?>

                <article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                    <header>
                        <h1>
                            <a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </h1>
                        <h2>
                            <a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark">
                                <span class="date"><?php the_time('j F, Y'); ?></span>
                            </a>
                        </h2>
                    </header>
                    <section>
                        <?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
                        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
                    </section>
                    <footer>
                        <section class="post-comments">
                            <h2>
                                <?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?>
                            </h2>
                        </section>
                        <section class="post-author">
                            <h2>Author</h2>
                            <h3><?php echo(get_the_author_link()) ?></h3>
                        </section>
                        <section class="post-categories">
                            <h2>Categories</h2>
                            <h3><?php echo(get_the_category_list(', ')) ?></h3>
                        </section>
                    </footer>
                </article>

            <?php endwhile; ?>

            </section>

            <section id="main-nav-below" class="navigation">
                <?php next_posts_link(__( '<div class="nav-previous">Older</div>', 'sandbox' )) ?>
                <?php previous_posts_link(__( '<div class="nav-next">Newer</div>', 'sandbox' )) ?>
            </section>

    </div><!-- #content -->

<?php get_footer() ?>
