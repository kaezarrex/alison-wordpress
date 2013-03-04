<?php get_header() ?>

            <div class="row">
                <div id="posts" class="span9">

                    <?php the_post() ?>

                    <div class="post">
                        <h1 class="post-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <div class="post-date">
                            <small><?php the_time('n.j.y') ?></small>
                        </div>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        <?php comments_template() ?>
                    </div>

                </div>
                <div id="sidebar" class="span3">
                    <?php get_sidebar() ?>
                </div>
            </div>

<?php get_footer() ?>
