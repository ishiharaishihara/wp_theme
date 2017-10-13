
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>sample</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

	<!-- Meta -->
	<meta name="description" content="石郷祐介のサイトです。">
	<meta name="keywords" content="キーワード">
	<meta name="robot" content="index,follow,noarchive">
	<meta name="author" content="Yusk">
	<meta name="language" content="ja">

	<!-- Favicon -->
	<link rel="shortcut icon" href="http://example.com/imgs/favicon.ico">
</head>
<body>
    <div class="container">
        <header>
            <h4>A sample site using gatsby-source-wordpress</h4>
            <div>Data feched from a site hosted on wordpress.com</div>
            <nav>
                <div><a href="">Home</a></div>
                <div>-</div>
                <div><a href="">Sample page</a></div>
                <div>-</div>
                <div><a href="">About</a></div>
            </nav>
            <?php wp_head(); ?>
        </header>
