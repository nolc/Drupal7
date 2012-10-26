
<?php require_once("header.tpl.php"); ?>

<?php //if (isset($logo) ): ?>
<!-- <div id="logo">
<img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" title="<?php print $site_name; ?>" id="logo" />
</div> -->
<?php //endif; ?>

	<div id="menu"><?php print $primary_nav; ?></div>

<div id="wrapper-main">
<div id="wrapper-content">
<div id="content">
<!--imagen permante de prueba-->
<img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" >


<div id="main">
<div id="breadcrumb"><?php print $breadcrumb; ?></div>
<?php if ($messages): ?>
<div id="messages"><?php print $messages; ?></div>
<?php endif; ?>
<div class="clearfix"><?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>

<?php if ($page): ?>
<h2> <?php print $title_attributes; ?>><?php print $title; ?></h2>
<?php endif; ?>

<?php print render( $page['content'] ); ?></div>
</div>
<div id="right_a"><?php print render( $page['right_a'] ); ?></div>
<div id="right_b"><?php print render( $page['right_b'] ); ?></div>
<div class="clear"></div>
</div>


</div>

<div id="right_a">Right A</div>
<div id="right_b">Right B</div>
<div class="clear"></div>

<div id="footer"><?php print render( $page['footer'] ); ?></div>

</body>
</html>