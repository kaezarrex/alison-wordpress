
            <div id="sidebar-content">
                <div id="bio" class="sidebar-section">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/profile_pic.png">
                    <div id="bio-headline">I'm Alison Citron.</div>
                    <div id="bio-body">This is where I talk about my design life adventures.</div>
                </div>
                <div class="sidebar-section">
                    <ul class="unstyled">
                        <!--<li><h2><a href="#" class="social-newsletter">Newsletter</a></h2></li>-->
                        <li><h2><a href="http://pinterest.com/thealisoncitron/" class="social-pinterest">Pinterest</a></h2></li>
                        <li><h2><a href="http://instagram.com/thealisoncitron" class="social-instagram">Instagram</a></h2></li>
                        <li><h2><a href="http://www.facebook.com/pages/Love-Citron/308198629206234" class="social-facebook">Facebook</a></h2></li>
                        <li><h2><a href="https://twitter.com/thealisoncitron" class="social-twitter">Twitter</a></h2></li>
                    </ul>
                </div>
                <div class="sidebar-section">
                    <h3 id="search">Search</h3>
                    <?php get_search_form(); ?>
                </div>
                <div class="sidebar-section">
                    <h3 id="categories"><a href="#sidebar-category-list" data-toggle="collapse">Categories</a></h3>
                    <ul id="sidebar-category-list" class="sidebar-list unstyled collapse">
                        <?php wp_list_cats(); ?>
                    </ul>
                </div>
                <div class="sidebar-section">
                    <h3 id="archives"><a href="#sidebar-archive-list" data-toggle="collapse">Archives</a></h3>
                    <ul id="sidebar-archive-list" class="sidebar-list unstyled collapse">
                        <?php wp_get_archives('type=monthly') ?>
                    </ul>
                </div>
            </div>
