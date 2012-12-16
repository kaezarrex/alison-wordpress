            <nav>
                <ul class="nav-menu">
                    <li><a href="http://alisoncitron.com/"><div class="nav-menu-item">About</div></a></li>
                    <li>
                        <a href="#"><div class="nav-menu-item"><?php _e( 'Categories', 'sandbox' ) ?></div></a>
                        <ul class="nav-sub-menu">
                            <?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
                        </ul>
                    </li>
                    <li><a href="http://www.etsy.com/shop/LoveCitron"><div class="nav-menu-item">Shop</div></a></li>
                    <li><a href="http://eepurl.com/gMRw9"><div class="nav-menu-item">Newsletter</div></a></li>
                </ul>
                <div id="social">
                    <a href="http://www.alisoncitron.com/blog/?feed=rss2" id="rss"><i class="icon-rss"></i></a>
                    <a href="http://twitter.com/#!/thealisoncitron" id="twitter"><i class="icon-twitter"></i></a>
                    <a href="http://www.facebook.com/pages/Love-Citron/308198629206234" id="facebook"><i class="icon-facebook"></i></a>
                </div>
            </nav>
