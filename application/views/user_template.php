<?php 
function asset_url()
{
	return base_url().'application/assets/';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php if (isset($page_title)) echo ' | ' . $page_title; ?></title>

<?php echo link_tag(asset_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico'); ?>

<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/tables.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/menu.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/jquery.datepick.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/thickbox.css">

<script type="text/javascript">
	var jsSiteUrl = '<?php echo base_url(); ?>';
</script>

<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.datepick.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/superfish.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/supersubs.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/thickbox-compressed.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/ezpz_tooltip.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/shortcutslibrary.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/shortcuts.js"></script>

</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo">
			<?php echo anchor('', 'Webzash', array('class' => 'anchor-link-b')); ?>
		</div>
		<?php
			if ($this->session->userdata('user_name')) {
				echo "<div id=\"admin\">";
				echo anchor('', 'Accounts', array('title' => "Accounts", 'class' => 'anchor-link-b'));
				echo " | ";
				/* Check if allowed administer rights */
				if (check_access('administer')) {
					echo anchor('admin', 'Administer', array('title' => "Administer", 'class' => 'anchor-link-b'));
					echo " | ";
				}
				echo anchor('user/profile', 'Profile', array('title' => "Profile", 'class' => 'anchor-link-b'));
				echo " | ";
				echo anchor('user/logout', 'Logout', array('title' => "Logout", 'class' => 'anchor-link-b'));
				echo "</div>";
			}
		?>
	</div>
	<div id="menu">
		<ul class="sf-menu">
			<li class="current">
			</li>
		</ul>
	</div>
	<div id="content">
		<div id="sidebar">
			<?php if (isset($page_sidebar)) echo $page_sidebar; ?>
		</div>
		<div id="main">
			<div id="main-title">
				<?php if (isset($page_title)) echo $page_title; ?>
			</div>
			<div id="main-links">
				<?php if (isset($nav_links)) {
					echo "<ul id=\"main-links-nav\">";
					foreach ($nav_links as $link => $title) {
						if ($title == "Print Preview")
							echo "<li>" . anchor_popup($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');', 'width' => '1024')) . "</li>";
						else
							echo "<li>" . anchor($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');')) . "</li>";
					}
					echo "</ul>";
				} ?>
			</div>
			<div class="clear">
			</div>
			<div id="main-content">

				<?php echo $contents; ?>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<?php if (isset($page_footer)) echo $page_footer ?>
	<a href="http://webzash.org" target="_blank">Webzash<a/> is licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License, Version 2.0</a>
</div>
</body>
</html>
