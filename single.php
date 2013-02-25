<?php get_header() ?>

        <div id="content">

        <?php get_sidebar() ?>

        <?php the_post() ?>

            <div id="nav-above" class="navigation">
                <?php previous_post_link( '%link', '<div class="nav-previous">%title</div>' ) ?>
                <?php next_post_link( '%link', '<div class="nav-next">%title</div>' ) ?>
            </div>

            <section id="posts">

                <article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                    <header>
                        <div class="date">
                            <?php the_time('j') ?> <?php the_time('M') ?> &#8211; <?php the_time() ?>
                        </div>
                        <h1 class="entry-title">
                            <a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </h1>
                    </header>
                    <section>
                        <?php the_content() ?>
                        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
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
                </article>

            </section>

            <div id="nav-below" class="navigation">
                <?php previous_post_link( '%link', '<div class="nav-previous">%title</div>' ) ?>
                <?php next_post_link( '%link', '<div class="nav-next">%title</div>' ) ?>
            </div>

<?php comments_template() ?>

        </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer() ?>
