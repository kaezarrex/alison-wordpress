    <footer id="main-footer">

        <section>
            <h1>Categories</h1>
            <ul>
                <?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
            </ul>
        </section>
        <section>
            <h1 class="yellow">Archives</h1>
            <ul>
            <?php wp_get_archives('type=monthly') ?>
            </ul>
        </section>
        <section>
            <h1>Contact</h1>
            <ul id='contact'>
                <li>love.citron&#123;at&#125;gmail&#123;dot&#125;com</li>
                <li><a href="http://www.alisoncitron.com">www.alisoncitron.com</a></li>
                <li><a href="http://lovecitron.etsy.com">lovecitron.etsy.com</a></li>
                <li><a href="http://eepurl.com/gMRw9">sign up for my mailing list</a></li>
            </ul>
        </section>
        <section>
            <h1 class="yellow">Search</h1>
            <form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
                <div>
                    <input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
                    <input type="submit" class="button" value="Go" tabindex="2" />
                </div>
            </form>
        </section>
        <section>
            <h1>Portfolio</h1>
            <a href="http://alisoncitron.com/portfolio.html">
                <img src="http://alisoncitron.com/images/cap.png" width="180px" height="180px">
                <div>Click to see the rest!</div>
            </a>
        </section>

        <div>
            <span id="generator-link"><a href="http://wordpress.org/" title="<?php _e( 'WordPress', 'sandbox' ) ?>" rel="generator"><?php _e( 'WordPress', 'sandbox' ) ?></a></span>
            <span class="meta-sep">|</span>
            <span id="theme-link"><a href="http://www.plaintxt.org/themes/sandbox/" title="<?php _e( 'Sandbox theme for WordPress', 'sandbox' ) ?>" rel="designer"><?php _e( 'Sandbox', 'sandbox' ) ?></a></span>
            <span class="meta-sep">|</span>
            <span><?php wp_loginout() ?></span>
        </div>
    </footer>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-519429-4']);
      _gaq.push(['_setDomainName', 'alisoncitron.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

<?php wp_footer() ?>

</body>
</html>
