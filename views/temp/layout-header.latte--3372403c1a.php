<?php
// source: C:\xampp\htdocs\theme_redone/wp-content/themes/theme-redone/views//layout/header.latte

use Latte\Runtime as LR;

final class Template3372403c1a extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html ';
		echo language_attributes() /* line 2 */;
		echo '>

<head>
	<meta charset="';
		echo LR\Filters::escapeHtmlAttr(bloginfo('charset')) /* line 5 */;
		echo '">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(tr_get_img_path('meta/favicon.ico'))) /* line 8 */;
		echo '" rel="shortcut icon">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(tr_get_img_path('meta/touch.png'))) /* line 9 */;
		echo '" rel="apple-touch-icon-precomposed">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	';
		echo LR\Filters::escapeHtmlText(wp_head()) /* line 15 */;
		echo '

	<style id="critical-css" type="text/css">
		';
		echo file_get_contents(get_template_directory() . '/prod/global/critical.css') /* line 18 */;
		echo '
	</style>

	<link rel="preload" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(get_template_directory_uri())) /* line 21 */;
		echo '/prod/global/style.css" as="style">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(get_template_directory_uri())) /* line 22 */;
		echo '/prod/global/style.css">

	<script type="text/javascript">
		var tr_theme_url = ';
		echo LR\Filters::escapeJs(get_bloginfo("template_url")) /* line 25 */;
		echo ';
		var tr_site_url = ';
		echo LR\Filters::escapeJs(esc_url( home_url( '/' ) )) /* line 26 */;
		echo ';
	</script>
</head>

<body ';
		echo body_class() /* line 30 */;
		echo '>
';
		/* line 31 */
		$this->createTemplate(tr_view_path('/layout/main-menu'), $this->params, 'include')->renderToContentType('html');
		echo '	<main class="main-content ';
		echo LR\Filters::escapeHtmlAttr(tr_is_ie() ? 'main_is_ie' : '') /* line 32 */;
		echo '">';
		return get_defined_vars();
	}

}
