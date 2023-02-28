    <footer>
        <div class="ovf">
            <div class="left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" /></a></div>
            <ul class="right">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
                <li><a href="<?php echo esc_url( home_url( '/info' ) ); ?>">info</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a></li>
            </ul>
        </div>
    </footer>
    <section id="menu_bx">
        <div id="menu" class="closeBtn" onclick="clickMenuBtn()">
            <span class="material-icons-outlined">close</span>
        </div>
        <ul>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
                <li><a href="<?php echo esc_url( home_url( '/info' ) ); ?>">info</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a></li>
                <li cass="menu_sign_btn"><a href="https://geoloca-cdead.web.app/signuin" target="_blank">sign in</a></li>
        </ul>
    </section>
    <script type="text/javascript">
        document.getElementById("menu_bx").style.display ="none";
        function clickMenuBtn(){
            const menu = document.getElementById("menu_bx");
            if(menu.style.display=="block"){
               menu.style.display ="none";
            }else{
               menu.style.display ="block";
            }
        }
    </script>
    <script>
        (function() {
          function noScroll(event) { event.preventDefault();}
          document.querySelector('#menu').addEventListener('click', function(){
            document.addEventListener('touchmove', noScroll, { passive: false });
            document.addEventListener('mousewheel', noScroll, { passive: false });
          });
          document.querySelector('.closeBtn').addEventListener('click', function(){
            document.removeEventListener('touchmove', noScroll, { passive: false });
            document.removeEventListener('mousewheel', noScroll, { passive: false });
          });
        })();
    </script>
<?php wp_footer(); ?>
</body>
</html>