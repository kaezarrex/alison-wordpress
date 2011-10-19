    <?php get_header() ?>

        <div id="content">

            <?php get_sidebar() ?>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

            <section id="posts">

            <?php while ( have_posts() ) : the_post() ?>

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
                        <?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
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

            <?php endwhile; ?>

            </section>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

    </div><!-- #content -->

<?php get_footer() ?>
