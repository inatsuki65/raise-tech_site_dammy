<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="WordPress theme development static data for beginners">
		<meta name="keywords" content="WordPress, Theme, development">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/common/ico/favicon.ico">
		<?php if(is_singular()) wp_enqueue_script("comment-reply"); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header">
			<div class="header__ttl">
				<p>
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/raise-tech_title.png">
						<span>
							最速で<strong>「稼げる」</strong>プロになる<br>
							エンジニアスクール
						</span>
						<nav class="header__nav" id="access" role="navigation">
							<ul>
								<li>はじめての方へ</li>
								<li>コースのご案内</li>
								<li>卒業生の声</li>
								<li>サポート</li>
								<li>受講申し込み</li>
							</ul>
						</nav>
					</a>
				</p>
			</div>
			
			
		</header>