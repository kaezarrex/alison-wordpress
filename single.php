<?php get_header() ?>

            <div class="row">
                <div id="posts" class="span9">

                    <?php the_post() ?>

                    <div class="post">
                        <h1>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
<?php comments_template() ?>
                    </div>

                </div>
                <div id="sidebar" class="span3">
                    <?php get_sidebar() ?>
                </div>
            </div>

<?php get_footer() ?>
