<?php get_header() ?>

        <div id="content">

        <?php get_sidebar() ?>

        <?php the_post() ?>

            <div id="nav-above" class="navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
                <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
            </div>

            <section id="posts">

                <article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                    <header>
                        <div class="date">
                            <span class="badge"><?php the_time('j') ?></span>
                            <span class="month"><?php the_time('M') ?> &#8211; <?php the_time() ?></span>
                        </div>
                        <h1 class="entry-title"><?php the_title() ?></h1>
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
            <?php comments_template() ?>
                </article>

            </section>

            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
                <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
            </div>


        </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer() ?>
