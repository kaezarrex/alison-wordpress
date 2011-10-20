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
            </nav>
