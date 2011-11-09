            <nav>
                <ul class="nav-menu">
                    <li><a href="http://alisoncitron.com/index.html"><div class="nav-menu-item">About</div></a></li>
                    <li>
                        <a href="#"><div class="nav-menu-item"><?php _e( 'Categories', 'sandbox' ) ?></div></a>
                        <ul class="nav-sub-menu">
                            <?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
                        </ul>
                    </li>
                    <li><a href="http://www.etsy.com/shop/LoveCitron"><div class="nav-menu-item">Shop</div></a></li>
                </ul>
                <div id="social">
                    <a href="http://www.alisoncitron.com/blog/?feed=rss2" id="rss"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" width="34px" height="34px"></a>
                    <a href="http://twitter.com/#!/thealisoncitron" id="twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" width="34px" height="34px"></a>
                    <a href="http://www.facebook.com/pages/Love-Citron/308198629206234" id="facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" width="34px" height="34px"></a>
                </div>
            </nav>
