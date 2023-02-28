<?php get_header(); ?>
<section id="kv">
    <div class="ovf">
        <div class="left">
            <h1>Share&nbsp;your&nbsp;location.<br>with&nbsp;<span>Geolocation</span></h1>
            <p>ジオロケーションでリアルタイムに自分の位置情報を<br class="pc_display">友だちと共有して知らせよう！</p>
            <div class="mv_signin_btn"><a href="https://geoloca-cdead.web.app/signup" target="_blank">sign up</a></div>
        </div>
        <div class="right">
            <img src="<?php bloginfo('template_directory'); ?>/images/kv.png" alt="Share your location. with Geolocation" />
        </div>
    </div>
</section>
<section id="service">
    <div class="ovf">
        <h2>サービス<span>Service</span></h2>
        <p>このサービスは....テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br class="pc_display">テキストが入ります。テキストが入ります。</p>
    </div>
</section>
<section id="features">
    <div class="ovf">
        <h2>特徴<span>features</span></h2>
        <div class="left sp_tb_display">
		<div class="phone">
			<img src="<?php bloginfo('template_directory'); ?>/images/geolocation_sp.png" alt="友だちがどこにいるのか探せます。" />
		</div>
        </div>
        <div class="right">
            <h3>説明タイトルが入ります。</h3>
            <ul>
                <li>説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。</li>
                <li class="sign_up_btn"><a href="https://geoloca-cdead.web.app/signup" target="_blank">sign up</a></li>
            </ul>
	    <div class='sp_display'>
		<img src="<?php bloginfo('template_directory'); ?>/images/geolocation_pc.png" alt="友だちがどこにいるのか探せます。" />
	    </div>
        </div>
    </div>
    <div class="ovf">
        <div class="left">
            <h3>説明タイトルが入ります。</h3>
            <ul>
                <li>説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。</li>
                <li class="sign_up_btn"><a href="https://geoloca-cdead.web.app/signin" target="_blank">sign up</a></li>
            </ul>
        </div>
        <div class="right pc_tb_display">
		<img src="<?php bloginfo('template_directory'); ?>/images/geolocation_pc.png" alt="友だちがどこにいるのか探せます。" />
        </div>
    </div>
</section>
<section id="use">
    <div class="ovf">
        <h2>ご使用方法<span>How&nbsp;to&nbsp;use</span></h2>
        <ul>
            <li>
                <span class="material-icons">person_add</span>
                <h3>Sign&nbsp;up</h3>
                <p>説明テキストが入ります。<br>説明テキスト</p>
            </li>
            <li>
                <span class="material-icons">people</span>
                <h3>Add&nbsp;new&nbsp;friend</h3>
                <p>説明テキストが入ります。<br>説明テキスト</p>
            </li>
            <li>
                <span class="material-icons">person_pin_circle</span>
                <h3>Share&nbsp;your&nbsp;location</h3>
                <p>説明テキストが入ります。<br>説明テキスト</p>
            </li>
        </ul>
    </div>
</section>
<section id="info">
    <div class="ovf">
        <h2>お知らせ<span>Information</span></h2>
        <ul>
		<?php
			$args = array('posts_per_page' => 3);
			$posts = get_posts( $args );
			foreach ( $posts as $post ):
			setup_postdata( $post );
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<h3>
					<?php
						if(mb_strlen($post->post_title,'UTF-8')>12){
						$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_title), 0, 12,'UTF-8'));
							echo $content.' . . . ';
						}else{
							echo str_replace('\n', '', strip_tags($post->post_title));
						}
					?>
				</h3>
				<div class="left">
					<p>
						<?php if(mb_strlen($post->post_content,'UTF-8')>24){
							$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 24,'UTF-8'));
							echo $content.' . . . ';
						}else{
							echo str_replace('\n', '', strip_tags($post->post_content));
						}
						?>
					</p>
				</div>
				<div class="right">
					<p><?php echo get_the_date(); ?></p>
				</div>
			</a>
		</li>
		<?php
			endforeach;
			wp_reset_postdata();
		?>
        </ul>
        <div class="btn"><a href="<?php echo esc_url( home_url( '/info' ) ); ?>">more</a></div>
    </div>
</section>
<?php get_footer(""); ?>