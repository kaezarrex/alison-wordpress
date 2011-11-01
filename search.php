<?php get_header() ?>

        <div id="content">

            <?php get_sidebar() ?>

<?php if ( have_posts() ) : ?>

            <h1 class="page-title"><?php _e( 'Search Results for:', 'sandbox' ) ?> <span><?php the_search_query() ?></span></h1>
            <?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>

            <section id="nav-above" class="navigation">
                <?php next_posts_link( '%link', '<div class="nav-previous">%title</div>' ) ?>
                <?php previous_posts_link( '%link', '<div class="nav-next">%title</div>' ) ?>
            </section>

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

<?php else : ?>

            <section id="posts">
                <article id="post-0" class="post no-results not-found">
                    <h1><?php _e( 'Nothing Found', 'sandbox' ) ?></h1>
                    <section>
                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'sandbox' ) ?></p>
                    </section>
                    <form id="searchform-no-results" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
                        <div>
                            <input id="s-no-results" name="s" class="text" type="text" value="<?php the_search_query() ?>" size="40" />
                            <input class="button" type="submit" value="<?php _e( 'Find', 'sandbox' ) ?>" />
                        </div>
                    </form>
                </div><!-- .post -->
            </section>

<?php endif; ?>

        </div><!-- #content -->

<?php get_footer() ?>
