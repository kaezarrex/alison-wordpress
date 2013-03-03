
            <div id="sidebar-content">
                <div id="bio">
                    <img src="http://placekitten.com/160/120">
                    <p>I'm Alison Citron</p>
                    <small>This is where I talk about my design life adventures.</small>
                </div>
                <ul class="unstyled">
                    <li><h2><a href="#">Newsletter</a></h2></li>
                    <li><h2><a href="#">Pinterest</a></h2></li>
                    <li><h2><a href="#">Instagram</a></h2></li>
                    <li><h2><a href="#">Facebook</a></h2></li>
                    <li><h2><a href="#">Twitter</a></h2></li>
                </ul>
                <h3 id="categories">Search</h3>
                <?php get_search_form(); ?>
                <h3 id="categories">Categories</h3>
                <ul class="unstyled">
                    <?php wp_list_cats(); ?>
                </ul>
                <h3 id="archives">Archives</h3>
                <ul class="unstyled">
                    <?php wp_get_archives('type=monthly') ?>
                </ul>
            </div>
