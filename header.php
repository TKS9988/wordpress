<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="robots" content="noindex"></meta>
    <meta charset="UTF-8">
    <title>タイトル</title>
    <meta name="Keywords" content="ジオロケ,位置共有,友だち探す">
    <meta name="Description" content="友だちを探して位置共有しよう！チャット機能付きでリアルタイムにやりとり！">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2,  user-scalable=yes">
    <meta property="og:url" content="https://xbent.xsrv.jp/portfoli3/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="友だちと位置情報を共有するチャットアプリ！geolocation" />
    <meta property="og:description" content="友だちを探して位置共有しよう！チャット機能付きでリアルタイムにやりとり！" />
    <meta property="og:site_name" content="ジオロケ" />
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/kv.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/import.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body id="body">
    <header>
        <nav>
            <div class="logo left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" /></a></div>
            <div class="right">
                <ul class="pc_display">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/info' ) ); ?>">info</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a></li>
                    <li class="signin_btn"><a href="https://geoloca-cdead.web.app/signin">sign in</a></li>
                </ul>
                <span id="menu" class="material-icons-outlined not_pc" onclick="clickMenuBtn()">drag_handle</span>
            </div>
        </nav>
    </header>
